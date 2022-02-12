import jenkins.model.*
jenkins = Jenkins.instance

node{

    stage(‘Build’) {
      steps {
        
        sh ‘docker-compose -f /var/lib/jenkins/workspace/docker-test/web-db-docker-file-for-uas-sa/docker-compose.yml up --build’
      }
      
    }

}
