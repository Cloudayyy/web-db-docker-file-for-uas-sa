import jenkins.model.*
jenkins = Jenkins.instance

node{

    stage(‘Build’) {
      steps {
        
        sh ‘docker-compose --project-directory /var/lib/jenkins/workspace/docker-test/ up -d --build --remove-orphans’
      }
      
    }

}
