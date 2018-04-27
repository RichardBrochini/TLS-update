const https = require('https');

const options = {
  method: 'POST',
  hostname: 'tls12.pagar.me',
  path: '/'
};

const req = https.request(options, function(res) {
  let response = "";

  res.on('data', function(data) {
    response += data;
  });

  res.on('end', function() {
    console.log(response);
  });

  req.on('error', function(e) {
    console.log(e);
  });

});

req.end();
