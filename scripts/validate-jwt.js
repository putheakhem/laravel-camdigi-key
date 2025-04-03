const { CamDigiKeyClient } = require('../node-lib');
(async () => {
    try {
        const token = process.argv[2];
        console.log(JSON.stringify(await CamDigiKeyClient.validateJwt(token)));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();