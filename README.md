# Country.io

Data from https://datahub.io/core/country-list#resource-country-list_zip combined into one JSON structure.

- combined.iso2.json - has ISO 3166-1 alpha-2 as key (DK, GB, US)
- combined.iso3.json - has ISO 3166-1 alpha-3 as key (DNK, GBR, USA)

Each country has a structure like:
```json
"US": {
        "names": "United States",
        "iso2": "US",
        "capital": "Washington",
        "continent": "NA",
        "phone": "1",
        "currency": "USD",
        "iso3": "USA"
    },
```

## Continents Codes

A JSON file that maps ISO2 country codes to ISO2 continent codes


```    ...
      "US": "NA",
      "UY": "SA",
      "UZ": "AS",
      "VA": "EU",
      "VC": "NA",
    ...
``` 

Link: http://country.io/continent.json

## Country Names

A JSON file that maps ISO2 country codes to country names

```
    ...
      "AL": "Albania",
      "AM": "Armenia",
      "AO": "Angola",
      "AQ": "Antarctica",
      "AR": "Argentina",
    ...
```

Link: http://country.io/names.json

## Country ISO Codes

A JSON file that maps ISO2 country codes to ISO3 country codes

```
    ...
      "US": "USA",
      "UY": "URY",
      "UZ": "UZB",
      "VA": "VAT",
      "VC": "VCT",
    ...
```

Link: http://country.io/iso3.json

## Capital Names

A JSON file that maps ISO2 country codes to country capital names

```
    ...
      "US": "Washington",
      "UY": "Montevideo",
      "UZ": "Tashkent",
      "VA": "Vatican City",
      "VC": "Kingstown",
    ...
```

Link: http://country.io/capital.json

## Phone Codes

A JSON file that maps ISO2 country codes to country phone codes

```
    ...
      "US": "1",
      "UY": "598",
      "UZ": "998",
      "VA": "379",
      "VC": "+1-784",
    ...
```

Link: http://country.io/phone.json

## Currency Codes

A JSON file that maps ISO2 country codes to country currency codes

```
    ...
      "US": "USD",
      "UY": "UYU",
      "UZ": "UZS",
      "VA": "EUR",
      "VC": "XCD",
    ...
```

Link: http://country.io/currency.json

