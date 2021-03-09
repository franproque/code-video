## Descrição

API de catálogo

## Rodar a aplicação

#### Crie os containers com Docker

```bash
$ docker-compose up
```

#### Accesse no browser

```
http://localhost:8000
```

## Crie baseado no recurso existente de Categoria os suguintes modulos nessa API

1. Generos (Genres)
2. Filmes (Movies)
3. Atores/Diretores (CastMember)

### Relacionamentos :

####O modelo de filmes deve ser ralcionado com:
- Categoria (belongsToMany)
- Generos (belongsToMany)
- Atores/Diretores (hasMany)

####O modelo de Categoria deve ser ralcionado com:
- Filmes (hasMany)

####O modelo de Generos deve ser ralcionado com:
- Filmes (hasMany)

####O modelo de Atores/Diretores deve ser ralcionado com:
- Filmes (belongsToMany)

###informações de Modelo

Generos :
```
name  - string, is_active  - boolean(Se está ativo ou não)
```
Atores/Diretores:
```
name - string, type - smallInteger (1 - Diretor, 2 - Actor)
```
Filmes:
```
name - string, description - varchar (descrição do filme), synopsis - varchar (sinopse)
```

###Informaçoes adicionais
Cada Recurso deve ter um repositorio, um servico que se conecta a esse repositorio, um modelo, uma factory, um seeder, um controller e testes em phpunit para todas essas coisas.

Cada controller deve ter FormRequests para validação na API

