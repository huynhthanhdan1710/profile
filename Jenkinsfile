pipeline {
    agent any
    stages {
        stage('Clone') {
            steps {
                git 'https://github.com/huynhthanhdan1710/profile.git'
            }
        }
        stage('Clone Repo') {
            steps {
                script {
                    sshScript = '''
                        ssh root@103.9.77.138 'df -h'
                    '''
                    sh sshScript
                }
            }
        }
    }
}