const { CamDigiKeyClient } = require('../node-lib');
(async () => {
    try {
        const accountToken = process.argv[2];
        console.log(JSON.stringify(await CamDigiKeyClient.verifyAccountToken(accountToken)));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();