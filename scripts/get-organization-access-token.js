const { CamDigiKeyClient } = require('../node-lib');
(async () => {
    try {
        console.log(JSON.stringify(await CamDigiKeyClient.getOrganizationAccessToken()));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();
