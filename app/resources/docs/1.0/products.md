# Products

---

- [Products](#products)
  - [Get Product by SKU](#get-product-by-sku)
      - [Request:](#request)
  - [Get Product by Name](#get-product-by-name)
      - [Request:](#request-1)

<a name="section-1"></a>
## Get Product by SKU

#### Request:

Type: `GET`
```code
http://YOUR_DOMAIN/api/v1/products/{sku}
```

`Example`


```code
http://YOUR_DOMAIN/api/v1/products/21
```

`Response`:

```code
{
    "data": {
        "id": 2,
        "name": "Veniam sed illum.",
        "sku": "7595060",
        "description": "Voluptatem quae qui est enim consequatur saepe numquam. In voluptas vel aut occaecati. Nemo molestiae necessitatibus minima fuga distinctio qui est. Pariatur dolores ipsa perferendis itaque sunt corrupti. Accusantium laudantium voluptates in maiores rerum. Aut aspernatur culpa et quaerat repudiandae voluptatem. Unde vel laborum atque repellat. Eaque voluptas pariatur alias consequuntur labore. Et id deserunt eum.",
        "price": 4009.57,
        "created_at": "2021-04-25T21:15:58.000000Z",
        "updated_at": "2021-04-25T21:15:58.000000Z"
    }
}
```

<a name="section-2"></a>
## Get Product by Name

#### Request:

Type: `GET`
```code
http://YOUR_DOMAIN/api/v1/products?name={name}
```

`Example`


```code
http://YOUR_DOMAIN/api/v1/products?name=Aliquam
```

`Response`:

```code
{
    "data": [
        {
            "id": 18,
            "name": "Aliquam aut quod molestias natus.",
            "sku": "4257915",
            "description": "Possimus quia facilis eaque quo. Eum et repudiandae cumque. Porro et nesciunt eos cum sunt. Libero occaecati eius exercitationem. Repellendus et et voluptas aut illo suscipit rem. Quia rerum praesentium quod et. Rerum quia repellat est rem omnis. Aut qui odit quia pariatur molestias nostrum. Impedit fuga delectus rem suscipit. Quibusdam et atque consequatur nam.",
            "price": 74264.6,
            "created_at": "2021-04-25T21:15:58.000000Z",
            "updated_at": "2021-04-25T21:15:58.000000Z",
            "relevance": 60
        }
    ]
}
```