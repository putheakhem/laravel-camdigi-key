const { CamDigiKeyClient } = require('../node-lib');
const client = new CamDigiKeyClient({
    clientId: process.env.CAMDIGIKEY_CLIENT_ID,
    hmacKey: process.env.CAMDIGIKEY_HMAC_KEY,
    aesSecretKey: process.env.CAMDIGIKEY_AES_SECRET_KEY,
    aesIvParams: process.env.CAMDIGIKEY_AES_IV_PARAMS,
    clientDomain: process.env.CAMDIGIKEY_CLIENT_DOMAIN,
    serverBaseUrl: process.env.CAMDIGIKEY_SERVER_BASED_URL,
    clientKeyStoreFile: process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE,
    clientKeyStorePassword: process.env.CAMDIGIKEY_CLIENT_KEYSTORE_FILE_PASSWORD,
    trustStoreFile: process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE,
    trustStorePassword: process.env.CAMDIGIKEY_CLIENT_TRUST_STORE_FILE_PASSWORD,
    redirectUri: process.env.CAMDIGIKEY_REDIRECT_URI,
});
(async () => {
    const code = process.argv[2];
    try {
        const token = await client.exchangeCodeForToken(code);
        console.log(JSON.stringify(token));
    } catch (e) {
        console.error(e.message);
        process.exit(1);
    }
})();
