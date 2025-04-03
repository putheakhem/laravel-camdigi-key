const path = require('path');
const { CamDigiKeyClient } = require('../node-lib');

// Resolve paths for secure .p12 files
process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE);
process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE);

(async () => {
    try {
        const authToken = process.argv[2]; // passed from PHP
        console.log(JSON.stringify(await CamDigiKeyClient.getUserAccessToken(authToken)));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();
