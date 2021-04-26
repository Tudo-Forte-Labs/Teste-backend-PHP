# Orders

---

- [Orders](#orders)
  - [Get Order by id](#get-order-by-id)
      - [Request:](#request)
  - [Create a new Order](#create-a-new-order)
      - [Request:](#request-1)

<a name="section-1"></a>
## Get Order by id

#### Request:

Type: `GET`
```code
http://YOUR_DOMAIN/api/v1/orders/{id}
```

`Example`


```code
http://YOUR_DOMAIN/api/v1/orders/21
```

`Response`:

```code
{
    "data": {
        "total": 182857.88,
        "date_sale": null,
        "products": [
            {
                "name": "Corporis eligendi possimus numquam.",
                "price": 95471.74,
                "manufacturer": [
                    {
                        "id": 36,
                        "name": "In saepe enim."
                    },
                    {
                        "id": 44,
                        "name": "Et velit."
                    },
                    {
                        "id": 81,
                        "name": "Occaecati quasi."
                    },
                    {
                        "id": 85,
                        "name": "Distinctio labore et."
                    },
                    {
                        "id": 89,
                        "name": "Amet atque qui."
                    }
                ]
            },
            {
                "name": "Veniam sed illum.",
                "price": 4009.57,
                "manufacturer": [
                    {
                        "id": 5,
                        "name": "Quod aut."
                    },
                    {
                        "id": 7,
                        "name": "Veritatis laborum magni."
                    },
                    {
                        "id": 17,
                        "name": "Porro quo quas."
                    }
                ]
            },
            {
                "name": "Eos dolor et repellendus.",
                "price": 83376.57,
                "manufacturer": [
                    {
                        "id": 49,
                        "name": "Doloremque id."
                    }
                ]
            }
        ]
    }
}
```

<a name="section-2"></a>
## Create a new Order

#### Request:

Type: `POST`
```code
http://YOUR_DOMAIN/api/v1/orders
```
```code
// JSON Raw Data

{
    "date_sale": "2021-25",
    "products": [
        7355213,
        7680421,
        2998823
    ]
}
```

`Example`


```code
http://YOUR_DOMAIN/api/v1/orders
```
```code
// JSON Raw Data

{
    "date_sale": "2021-25",
    "products": [
        7355213,
        7680421,
        2998823
    ]
}
```

`Response`:

```code
{
    "data": {
        "total": 102053.29000000001,
        "date_sale": null,
        "products": [
            {
                "name": "Voluptatem ex est.",
                "price": 65037.48,
                "manufacturer": [
                    {
                        "id": 26,
                        "name": "Illo dolores nisi."
                    },
                    {
                        "id": 42,
                        "name": "Aspernatur minus."
                    },
                    {
                        "id": 43,
                        "name": "Laborum consectetur."
                    },
                    {
                        "id": 62,
                        "name": "Sed optio."
                    },
                    {
                        "id": 68,
                        "name": "Sed est nisi."
                    }
                ]
            },
            {
                "name": "Et ab nisi placeat.",
                "price": 18164.26,
                "manufacturer": [
                    {
                        "id": 23,
                        "name": "Esse et a."
                    }
                ]
            },
            {
                "name": "Nihil quidem ut dolores.",
                "price": 18851.55,
                "manufacturer": [
                    {
                        "id": 46,
                        "name": "Animi et."
                    },
                    {
                        "id": 58,
                        "name": "Qui maxime."
                    },
                    {
                        "id": 79,
                        "name": "Fugit consequatur aut."
                    }
                ]
            }
        ]
    }
}
```