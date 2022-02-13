import jenkins.model.*
jenkins = Jenkins.instance

node{

    stage(‘Build’) {
      steps {
        
        sh ‘docker-compose --project-directory /root/Downloads/MAFEL/UAS_SA/trucorp-web-2.0/ up -d --build --remove-orphans’
      }
      
    }

}
