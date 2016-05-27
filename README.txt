playground to test the elasticsearch api.

elasticsearch:
- install and unzip https://download.elastic.co/elasticsearch/release/org/elasticsearch/distribution/zip/elasticsearch/2.3.3/elasticsearch-2.3.3.zip
- cd elasticsearch/bin && ./elasticsearch
- check elasticsearch by running `curl -X GET localhost:9200`
- optional: install POSTMAN for easier API testing access

this repo:
- clone http://github.com/engelju/elasticsearch-test into /Applications/MAMP/htdocs/
- make a MAMP entry to /Applications/MAMP/htdocs/elasticsearch-test/public for elasticsearch.localhost

ressources:
- https://github.com/elastic/elasticsearch-php
- https://www.elastic.co/guide/en/elasticsearch/client/php-api/2.0/index.html
- https://www.elastic.co/guide/en/elasticsearch/reference/current/index.html
- Codecourse on Elasticsearch: https://www.youtube.com/watch?v=3xb1dHLg-Lk
- PHPNW15 Talk on Elasticsearch: https://www.youtube.com/watch?v=hJ2o4QgpIU4
- installing ES on homestead: https://gist.github.com/engelju/5e1d4520cb22e170bec06f251d989ea4 (broken... :( )

talks:
- Visualizing Logs using Elasticsearch, Logstash and Kibana: https://www.youtube.com/watch?v=Kqs7UcCJquM (unwatched)
- Elasticsearch in Production; Lessons learned: https://www.youtube.com/watch?v=bMi2g3uEAxU (unwatched)
- Getting Started with Elasticsearch: https://www.youtube.com/watch?v=60UsHHsKyN4 (unwatched)
- Elasticsearch from the bottom up: https://www.youtube.com/watch?v=PpX7J-G2PEo (unwatched)
- Getting Down and Dirty with Elasticsearch: https://www.youtube.com/watch?v=7FLXjgB0PQI (unwatched)
- Explore Your Data with Elasticsearch: https://www.youtube.com/watch?v=UNsDUNWRWzg (unwatched)
