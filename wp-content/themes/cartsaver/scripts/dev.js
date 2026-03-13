#!/usr/bin/env node
/**
 * Development script to run CSS and JS watchers in parallel
 * Compatible with Node.js 22+
 */

const { spawn } = require('child_process');
const path = require('path');

const cssCmd = spawn('npm', ['run', 'dev:css'], {
	cwd: __dirname,
	stdio: 'inherit',
	shell: true,
});

const jsCmd = spawn('npm', ['run', 'dev:js'], {
	cwd: __dirname,
	stdio: 'inherit',
	shell: true,
});

// Handle process termination
process.on('SIGINT', () => {
	cssCmd.kill();
	jsCmd.kill();
	process.exit(0);
});

process.on('SIGTERM', () => {
	cssCmd.kill();
	jsCmd.kill();
	process.exit(0);
});

// Exit if either process exits
cssCmd.on('exit', (code) => {
	if (code !== null && code !== 0) {
		jsCmd.kill();
		process.exit(code);
	}
});

jsCmd.on('exit', (code) => {
	if (code !== null && code !== 0) {
		cssCmd.kill();
		process.exit(code);
	}
});
