const { CamDigiKeyClient } = require('../node-lib');

(async () => {
    const authToken = process.argv[2];

    try {
        console.log(JSON.stringify(await CamDigiKeyClient.default.getUserAccessToken(authToken)));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();
