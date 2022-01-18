## lighthouse-laravel

[graphql-playground](http://localhost:8000/graphql-playground)

```graphql
{
  posts {
    id
    title
    author {
      name
    }
    comments {
      id
      reply
    }
  }
}
```
### Response
```json
{
  "data": {
    "posts": [
      {
        "id": "1",
        "title": "Et quo provident beatae nihil fuga.",
        "author": {
          "name": "Isac Wyman"
        },
        "comments": [
          {
            "id": "1",
            "reply": "Omnis ut sed cupiditate dolorem iure."
          },
          {
            "id": "2",
            "reply": "Quam qui doloremque dolor nisi et illum."
          },
          {
            "id": "3",
            "reply": "Et nam asperiores aut consequatur."
          }
        ]
      }
    ]
  }
}
```

## Postman example

[get user](http://localhost:8000/graphql?query={user(id:1){id,name,email,created_at,updated_at}})

```json
{
    "data": {
        "user": {
            "id": "1",
            "name": "Isac Wyman",
            "email": "kuvalis.leatha@example.net",
            "created_at": "2022-01-18 06:52:16",
            "updated_at": "2022-01-18 06:52:16"
        }
    }
}
```

[post create posts](http://localhost:8000/graphql)

```graphql
mutation {
    createPost(input: {
        title: "My new Post3",
        content: "my content3",
        author: {
            connect: 1
        }
    }) {
        id
        title
        content
        author {
            id
            name
            email
        }
    }
}
```
### Response
```json
{
    "data": {
        "createPost": {
            "id": "53",
            "title": "My new Post3",
            "content": "my content3",
            "author": {
                "id": "1",
                "name": "Isac Wyman",
                "email": "kuvalis.leatha@example.net"
            }
        }
    }
}
```
