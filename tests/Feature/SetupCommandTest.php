<?php

declare(strict_types=1);

// Note: These tests verify the command exists
// Actual command execution requires the Node.js library to be installed

it('command exists in source code', function () {
    $commandFile = __DIR__.'/../../src/Console/SetupCamDigiKey.php';

    expect(file_exists($commandFile))->toBeTrue();
});
