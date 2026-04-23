const path = require('path');

// Resolve paths for secure .p12 files
if (process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE) {
    process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE);
}
if (process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE) {
    process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE);
}
const { CamDigiKeyClient } = require('../node-lib');

(async () => {
    try {
        const authToken = process.argv[2]; // passed from PHP
        console.log(JSON.stringify(await CamDigiKeyClient.default.getUserAccessToken(authToken)));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();
