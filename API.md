# API code postaux

https://api.gouv.fr/les-api/api_carto_codes_postaux

https://github.com/BaseAdresseNationale/codes-postaux#codes-postaux



Installation
``````
$ npm install codes-postaux --save
```````

Utilisation

```
const codesPostaux = require('codes-postaux');

codesPostaux.find(75001);
codesPostaux.find('75001');
```

Retourne
```
[ { codeCommune: '75101',
    nomCommune: 'Paris 1er Arrondissement',
    codePostal: '75001',
    libelleAcheminement: 'PARIS' } ]
```
