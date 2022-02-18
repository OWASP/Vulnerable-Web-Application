pipeline {
     agent any
     stages{
          stage('Checkout Code from GitHub Repository'){
            steps{
             git 'https://github.com/Shobika/Vulnerable-Web-Application.git'
            }
      }
          stage('SonarQube Analysis') {
           environment {
              SCANNER_HOME = tool 'sonarscanner6'
            }
            steps {
              withSonarQubeEnv('sonar6') {
              sh "${SCANNER_HOME}/bin/sonar-scanner"
             }
            }
           }
        }
    }

