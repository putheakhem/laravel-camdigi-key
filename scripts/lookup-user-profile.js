const { CamDigiKeyClient } = require('../node-lib');
(async () => {
    try {
        const accessToken = process.argv[2];
        const personalCode = process.argv[3];
        console.log(JSON.stringify(await CamDigiKeyClient.lookupUserProfile(accessToken, personalCode)));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();