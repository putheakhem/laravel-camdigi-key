const path = require('path');
if (process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE) {
    process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE);
}
if (process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE) {
    process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE);
}
const { CamDigiKeyClient } = require('../node-lib');
(async () => {
    try {
        console.log(JSON.stringify(await CamDigiKeyClient.default.getLoginToken()));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();
