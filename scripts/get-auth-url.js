const { CamDigiKeyClient } = require('../node-lib');

(async () => {
    try {
        const response = await CamDigiKeyClient.default.getLoginToken();
        const loginUrl = response?.data?.loginUrl;

        if (loginUrl) {
            console.log(loginUrl);

            return;
        }

        console.log(JSON.stringify(response));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();
