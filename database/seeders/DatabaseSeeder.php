<?php

namespace Database\Seeders;

use App\Models\studyMaterial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        studyMaterial::create([
            'skill-name'=>'Python',
            'topic'=>'Python',
            'link'=>'https://www.youtube.com/watch?v=UrsmFxEIp5k',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'What is DBMS',
            'link'=>'https://www.youtube.com/watch?v=mqprM5YUdpk&pp=ygUMV2hhdCBpcyBEQk1T',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'DBMS architecture',
            'link'=>'https://www.youtube.com/watch?v=VyvTabQHevw&pp=ygURREJNUyBhcmNoaXRlY3R1cmU%3D',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'What is a schema',
            'link'=>'https://www.youtube.com/watch?v=3BZz8R7mqu0&pp=ygUQV2hhdCBpcyBhIHNjaGVtYQ%3D%3D',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Three Schema Architecture',
            'link'=>'https://www.youtube.com/watch?v=5fs1ldO6B5c',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Types of Keys',
            'link'=>'https://www.youtube.com/watch?v=p3yJZH8_bsc',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Entity Relationship model',
            'link'=>'https://www.youtube.com/watch?v=5nGC4fyFPes',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Types of Relationship',
            'link'=>'https://www.youtube.com/watch?v=4qkeGvUnag',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Constraints',
            'link'=>'https://www.youtube.com/watch?v=uPOGPL2C0_8',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Normalization',
            'link'=>'https://www.youtube.com/watch?v=GFQaEYEc8_8&t=27s',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'De',
            'link'=>'Normalizationhttps://www.youtube.com/watch?v=4bTq0GdSeQs',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'What is SQL',
            'link'=>'https://www.youtube.com/watch?v=Cz3WcZLRaWc&t=9s',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'DDL',
            'link'=>'https://www.youtube.com/watch?v=k6HKfdfAywU',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'DML',
            'link'=>'https://www.youtube.com/watch?v=6CzfqZU2k0c',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'DCL',
            'link'=>'https://www.youtube.com/watch?v=N5zCzLbjJuE',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'TCL',
            'link'=>'https://www.youtube.com/watch?v=OSfcmmoQWgU',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'PL/SQL',
            'link'=>'https://www.youtube.com/watch?v=xofpqdU3cD4',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Indexing',
            'link'=>'https://www.youtube.com/watch?v=SxHX1T53n_A',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Joins and types of joins',
            'link'=>'https://www.youtube.com/watch?v=H6988OpZKTU',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'Views',
            'link'=>'https://www.youtube.com/watch?v=QngqhdLd1SE',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'SQL',
            'topic'=>'SQL Practice Questions (Important)',
            'link'=>'https://leetcode.com/studyplan/topsql50/',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'NoSQL',
            'topic'=>'Apache Cassandra',
            'link'=>'https://www.youtube.com/watch?v=JcSy5MeMOA',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Data Processing',
            'topic'=>'Batch Data—Apache Spark',
            'link'=>'https://www.youtube.com/playlist?list=PL6UwySlcwEYKiCEjEmN4f33c5fVpbzha',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Data Processing',
            'topic'=>'Streaming Data—Apache Kafka',
            'link'=>'https://www.youtube.com/playlist?list=PLYmXYyXCMsfMMhiKPw4k1FF7KWxOEajsA',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Data Scheduling',
            'topic'=>'Apache Airflow',
            'link'=>'https://www.youtube.com/playlist?list=PLwFJcsJ61oujAqYpMp1kdUBcPG0sE0QMT',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Data Warehousing',
            'topic'=>'Data Warehouses',
            'link'=>'https://www.youtube.com/watch?v=zJ23GQRL7lg&list=PL6UwySlcwEYKxifQHLkVYDZrJcBawZA9',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Data Warehousing',
            'topic'=>'ETL',
            'link'=>'https://www.youtube.com/watch?v=QSFq8S_Ui5g&list=PLLhBy6YSIT0CpEhpq6uuM5t_AtCEEovtv',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Data Warehousing',
            'topic'=>'Snowflake',
            'link'=>'https://www.youtube.com/watch?v=xCCkHZf1aI',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cloud AWS',
            'topic'=>'VPC',
            'link'=>'https://www.youtube.com/watch?v=g2JOHLHh4rI',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cloud AWS',
            'topic'=>'EC2',
            'link'=>'https://www.youtube.com/watch?v=FKQwXtrSSQ',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cloud AWS',
            'topic'=>'S3',
            'link'=>'https://www.youtube.com/watch?v=d8A8JmAImc4',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cloud AWS',
            'topic'=>'RDS',
            'link'=>'https://www.youtube.com/watch?v=rM_c7K0tC0',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cloud AWS',
            'topic'=>'Lambda',
            'link'=>'https://www.youtube.com/watch?v=AgOmeANl3ls',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cloud AWS',
            'topic'=>'EKS',
            'link'=>'https://www.youtube.com/watch?v=p6xDCz00TxU',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cl—CD',
            'topic'=>'Containerization—Docker',
            'link'=>'https://www.youtube.com/watch?v=3ciBn73dDE&t=2s',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cl—CD',
            'topic'=>'Container Orchestration—Docker Compose ',
            'link'=>'https://www.youtube.com/watch?v=SXwC9fSwct8',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cl—CD',
            'topic'=>'Container Orchestration—Kubernetes',
            'link'=>'https://www.youtube.com/watch?v=7XDeI5fyj3w',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cl—CD',
            'topic'=>'Cl—CD pipeline',
            'link'=>'Jenkinshttps://www.youtube.com/watch?v=6YZvp2GwT0A',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cl—CD',
            'topic'=>'Cl—CD pipeline',
            'link'=>'Gitlab Clhttps://www.youtube.com/watch?v=qP8kir2GUgo',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Cl—CD',
            'topic'=>'GitOps',
            'link'=>'Argo CDhttps://www.youtube.com/watch?v=MeU5_k9ssrs',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Data Pipeline Practice Project',
            'topic'=>'Data Pipeline Practice Project',
            'link'=>'https://www.youtube.com/watch?v=OLXkGB7krGo&t=95s',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Interview Questions',
            'topic'=>'Set 1',
            'link'=>'https://www.youtube.com/watch?v=xS82xt6wvzw',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Interview Questions',
            'topic'=>'Set 2',
            'link'=>'https://www.youtube.com/watch?v=t_Zy_B4bTYs',
            'status'=>0,
        ]);
        studyMaterial::create([
            'skill-name'=>'Interview Questions',
            'topic'=>'Set 3',
            'link'=>'https://www.youtube.com/watch?v=1H93k9H0F2Y',
            'status'=>0,
        ]);

    }
}
