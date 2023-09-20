pipeline {
    agent any
    stages {
        stage('Clone') {
            steps {
                git 'https://github.com/huynhthanhdan1710/profile.git'
            }
        }
        stage('Clone Repo')
         steps {
            ssh root@123.30.140.234 'df -h'
         }
    }
}