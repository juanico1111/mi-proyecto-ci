pipeline {
  agent any
  stages {
    stage('Checkout') {
      steps {
        checkout scm
        echo 'Codigo fuente obtenido desde GitHub'
      }
    }
    stage('Build') {
      steps {
        sh 'docker compose build --no-cache'
        echo 'Imagenes Docker construidas correctamente'
      }
    }
    stage('Test') {
      steps {
        sh 'docker compose run --rm backend node -e "console.log(\"Test OK\")"'
        echo 'Prueba basica del backend completada'
      }
    }
    stage('Deploy') {
      steps {
        sh 'docker compose up -d'
        echo 'Contenedores desplegados correctamente'
      }
    }
  }
  post {
    success { echo 'Pipeline ejecutado exitosamente' }
    failure { echo 'El pipeline fallo. Revisar los logs de Jenkins' }
  }
}