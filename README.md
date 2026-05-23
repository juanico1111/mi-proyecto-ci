# mi-proyecto-ci

Proyecto de software con herramientas de integración continua - Docker, Jenkins, Travis CI

## Componentes

El proyecto está compuesto por dos servicios principales:

- **Frontend**: Aplicación web servida con Nginx en el puerto `8080`
- **Backend**: Servidor Node.js ejecutándose en el puerto `3000`

## Levantar el proyecto localmente

### Requisitos previos

- Docker instalado
- Docker Compose instalado

### Pasos

1. Navega al directorio del proyecto:

```bash
cd mi-proyecto-ci
```

2. Levanta los servicios con Docker Compose:

```bash
docker compose up --build
```

3. Accede a las aplicaciones:

- Frontend: http://localhost:8080
- Backend: http://localhost:3000

### Detener el proyecto

```bash
docker compose down
```
