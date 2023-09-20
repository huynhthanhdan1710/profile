pipeline {
    agent any
    stages {
        stage('Updated') {
            steps {
                git 'https://github.com/huynhthanhdan1710/profile.git'
            }
        }
        stage('Pull Source') {
            steps {
                script {
                    sshScript = '''
                        ssh root@123.30.140.234 -p 2202 'cd /home/danpro/domains/dan.id.vn/public_html/profile && git pull https://github.com/huynhthanhdan1710/profile.git'
                    '''
                    sh sshScript
                }
            }
        }
    }
}