f = """Python-Python-https://www.youtube.com/watch?v=UrsmFxEIp5k
SQL-What is DBMS-https://www.youtube.com/watch?v=mqprM5YUdpk&pp=ygUMV2hhdCBpcyBEQk1T
SQL-DBMS architecture-https://www.youtube.com/watch?v=VyvTabQHevw&pp=ygURREJNUyBhcmNoaXRlY3R1cmU%3D
SQL-What is a schema-https://www.youtube.com/watch?v=3BZz8R7mqu0&pp=ygUQV2hhdCBpcyBhIHNjaGVtYQ%3D%3D
SQL-Three Schema Architecture-https://www.youtube.com/watch?v=5fs1ldO6B5c
SQL-Types of Keys-https://www.youtube.com/watch?v=p3yJZH8_bsc
SQL-Entity Relationship model-https://www.youtube.com/watch?v=5nGC4fyFPes
SQL-Types of Relationship-https://www.youtube.com/watch?v=4q-keGvUnag
SQL-Constraints-https://www.youtube.com/watch?v=uPOGPL2C0_8
SQL-Normalization-https://www.youtube.com/watch?v=GFQaEYEc8_8&t=27s
SQL-De-Normalization-https://www.youtube.com/watch?v=4bTq0GdSeQs
SQL-What is SQL-https://www.youtube.com/watch?v=Cz3WcZLRaWc&t=9s
SQL-DDL-https://www.youtube.com/watch?v=k6HKfdfAywU
SQL-DML-https://www.youtube.com/watch?v=6CzfqZU2k0c
SQL-DCL-https://www.youtube.com/watch?v=N5zCzLbjJuE
SQL-TCL-https://www.youtube.com/watch?v=OSfcmmoQWgU
SQL-PL/SQL-https://www.youtube.com/watch?v=xofpqdU3cD4
SQL-Indexing-https://www.youtube.com/watch?v=SxHX1T53n_A
SQL-Joins and types of joins-https://www.youtube.com/watch?v=H6988OpZKTU
SQL-Views-https://www.youtube.com/watch?v=QngqhdLd1SE
SQL-SQL Practice Questions (Important)-https://leetcode.com/studyplan/top-sql-50/
NoSQL-Apache Cassandra-https://www.youtube.com/watch?v=J-cSy5MeMOA
Data Processing-Batch Data—Apache Spark-https://www.youtube.com/playlist?list=PL6UwySlcwEYKiC-EjEmN4f33c5fVpbzha
Data Processing-Streaming Data—Apache Kafka-https://www.youtube.com/playlist?list=PLYmXYyXCMsfMMhiKPw4k1FF7KWxOEajsA
Data Scheduling-Apache Airflow-https://www.youtube.com/playlist?list=PLwFJcsJ61oujAqYpMp1kdUBcPG0sE0QMT
Data Warehousing-Data Warehouses-https://www.youtube.com/watch?v=zJ23GQRL7lg&list=PL6UwySlcwEYKxi-fQHLkVYDZrJcBawZA9
Data Warehousing-ETL-https://www.youtube.com/watch?v=QSFq8S_Ui5g&list=PLLhBy6YSIT0CpEhpq6uuM5t_AtCEEovtv
Data Warehousing-Snowflake-https://www.youtube.com/watch?v=xCCkHZf1-aI
Cloud AWS-VPC-https://www.youtube.com/watch?v=g2JOHLHh4rI
Cloud AWS-EC2-https://www.youtube.com/watch?v=-FKQwXtrSSQ
Cloud AWS-S3-https://www.youtube.com/watch?v=d8A8JmAImc4
Cloud AWS-RDS-https://www.youtube.com/watch?v=rM_c7K0-tC0
Cloud AWS-Lambda-https://www.youtube.com/watch?v=AgOmeANl3ls
Cloud AWS-EKS-https://www.youtube.com/watch?v=p6xDCz00TxU
Cl—CD-Containerization—Docker-https://www.youtube.com/watch?v=3c-iBn73dDE&t=2s
Cl—CD-Container Orchestration—Docker Compose -https://www.youtube.com/watch?v=SXwC9fSwct8
Cl—CD-Container Orchestration—Kubernetes-https://www.youtube.com/watch?v=7XDeI5fyj3w
Cl—CD-Cl—CD pipeline-Jenkins-https://www.youtube.com/watch?v=6YZvp2GwT0A
Cl—CD-Cl—CD pipeline-Gitlab Cl-https://www.youtube.com/watch?v=qP8kir2GUgo
Cl—CD-GitOps-Argo CD-https://www.youtube.com/watch?v=MeU5_k9ssrs
Data Pipeline Practice Project-Data Pipeline Practice Project-https://www.youtube.com/watch?v=OLXkGB7krGo&t=95s
Interview Questions-Set 1-https://www.youtube.com/watch?v=xS82xt6wvzw
Interview Questions-Set 2-https://www.youtube.com/watch?v=t_Zy_B4bTYs
Interview Questions-Set 3-https://www.youtube.com/watch?v=1H93k9H0F2Y"""
op = open('ouput.txt','w',encoding='utf-8')
text = f.readlines()
for line in text:
    data = line.split('-')

    skill_name = data[0]
    title = data[1]
    link = "".join(data[2:]).replace("\n",'')
    print(f"""        studyMaterial::create([
            'skill-name'=>'{skill_name}',
            'topic'=>'{title}',
            'link'=>'{link}',
            'status'=>0,
        ]);""",file=op)

    