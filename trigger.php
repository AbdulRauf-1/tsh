<?php
// Path to your working directory
$workingDir = '/home/trimworldwide/rauf.trimworldwide.com';

// Full path to node and npm binaries
$nodePath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/node';
$npmPath = '/home/trimworldwide/.nvm/versions/node/v18.20.4/bin/npm';

// Export PATH for the script to find node and npm
$exportPath = 'export PATH=$PATH:/home/trimworldwide/.nvm/versions/node/v18.20.4/bin';

// Set permissions for node and npm binaries
$setBinaryPermissions = shell_exec("chmod +x $nodePath $npmPath 2>&1");

// Set permissions for the working directory
$setDirPermissions = shell_exec("chmod -R 775 $workingDir 2>&1");

// Run npm install with explicit PATH export
$output = shell_exec("$exportPath && cd $workingDir && $npmPath install 2>&1");

// Display results
echo "Binary Permissions Output:<br />" . nl2br($setBinaryPermissions) . "<br />";
echo "Directory Permissions Output:<br />" . nl2br($setDirPermissions) . "<br />";
echo "NPM Install Output:<br />" . nl2br($output) . "<br />";
?>