# Simple MyLab API

- #### POST /api/servicesrand

    - "number" must be numeric and >= 1
    - can work without variable "number" (will return all labs in random order)
#### request body:
    {
        "number": 3
    }

#### response:

    "data": [
        {
            "name": "random lab",
            "time": 60,
            "price": 500
        },
        {
            "name": "random lab",
            "time": 70,
            "price": 500
        },
        {
            "name": "random lab",
            "time": 50,
            "price": 450
        }
    ]
                
- #### POST /api/servicescount

#### response:
			7