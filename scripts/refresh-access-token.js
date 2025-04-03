const { CamDigiKeyClient } = require('../node-lib');
(async () => {
    try {
        const accessToken = process.argv[2];
        console.log(JSON.stringify(await CamDigiKeyClient.refreshUserAccessToken(accessToken)));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();