document.addEventListener('DOMContentLoaded', () => {
  const roots = document.querySelectorAll('.embla')

  if (!roots.length || typeof window.EmblaCarousel !== 'function') return

  roots.forEach((root) => {
    const viewport = root.querySelector('.embla__viewport')
    const dotsRoot = root.querySelector('.embla__dots')

    if (!viewport) return

    const autoplay = root.dataset.autoplay === '1'
    const delay = Number.parseInt(root.dataset.autoplayDelay || '2500', 10)

    const embla = window.EmblaCarousel(viewport, {
      loop: true,
      align: 'start',
    })

    // Dots
    const dots = dotsRoot ? Array.from(dotsRoot.querySelectorAll('.embla__dot')) : []

    const setSelectedDot = () => {
      if (!dots.length) return
      const selectedIndex = embla.selectedScrollSnap()
      dots.forEach((dot, index) => {
        dot.classList.toggle('is-selected', index === selectedIndex)
      })
    }

    embla.on('select', setSelectedDot)
    setSelectedDot()

    dots.forEach((dot, index) => {
      dot.addEventListener('click', () => embla.scrollTo(index))
    })

    // Autoplay
    if (autoplay) {
      let timerId

      const stop = () => {
        if (timerId) {
          window.clearInterval(timerId)
          timerId = undefined
        }
      }

      const start = () => {
        stop()
        timerId = window.setInterval(() => {
          if (embla.canScrollNext()) embla.scrollNext()
          else embla.scrollTo(0)
        }, delay)
      }

      embla.on('pointerDown', stop)
      embla.on('pointerUp', start)
      embla.on('destroy', stop)

      start()
    }
  })
})
