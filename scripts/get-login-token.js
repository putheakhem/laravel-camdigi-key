const path = require('path');
const { CamDigiKeyClient } = require('../node-lib');
process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE);
process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE = path.resolve(process.cwd(), process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE);
(async () => {
    try {
        console.log(JSON.stringify(await CamDigiKeyClient.getLoginToken()));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();