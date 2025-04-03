const { CamDigiKeyClient } = require('../node-lib');
const client = new CamDigiKeyClient({});
const idToken = process.argv[2];
const info = client.getUserInfo(idToken);
console.log(JSON.stringify(info));