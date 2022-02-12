import jenkins.model.*
jenkins = Jenkins.instance

node{

    stage(‘Build’) {
      steps {
        sh 'git clone https://github.com/Cloudayyy/web-db-docker-file-for-uas-sa'
        sh ‘docker-compose -f /var/lib/jenkins/workspace/web-db-docker-file-for-uas-sa/docker-compose.yml up --build’
      }
      
    }

}
