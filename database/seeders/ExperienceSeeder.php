<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $experiences = array(
            array(
                'job_name' => "Web Developer Internship",
                'company_name' => "Tegal Learning Center",
                'month_start' => '2021-06-01',
                'month_end' => '2021-07-01',
                'company_photo' => "https://media.licdn.com/dms/image/C510BAQFI_av2w4QvAQ/company-logo_200_200/0/1631346451698?e=1723680000&v=beta&t=WP_ydafq-otPy_BXfGntl1FQy_niq29CcXoP2wvrrxQ",
                'describe' => "Designing the website system requirements for the organization|Designing the user interface using Figma software|Implementing HTML, JS, and CSS code according to the user interface design|Developing and maintaining the website"
            ),
            array(
                'job_name' => "Data Entry",
                'company_name' => "LPPM Diponegoro University",
                'month_start' => '2022-08-01',
                'month_end' => '2022-09-01',
                'company_photo' => "https://media.licdn.com/dms/image/C510BAQFI_av2w4QvAQ/company-logo_200_200/0/1631346451698?e=1723680000&v=beta&t=WP_ydafq-otPy_BXfGntl1FQy_niq29CcXoP2wvrrxQ",
                'describe' => "Validate 1000++ lecturer journal data available in spreadsheet form|Synchronizing available journal data and data in the SINTA (Science and Technology Index) system|Inputting research data of lecturers and students into SINTA (Science and Technology Index) system"
            ),
            array(
                'job_name' => "Backend Web Developer",
                'company_name' => "PT Kalimas Arubu Indonesia Semarang",
                'month_start' => '2022-12-01',
                'month_end' => '2023-02-01',
                'company_photo' => "https://media.licdn.com/dms/image/D560BAQEuhhSTHYJZ2w/company-logo_200_200/0/1693796644598/pt_kalimas_arubu_indonesia_logo?e=1723680000&v=beta&t=P9VcSVVvSMK-DZM1b2gGcxq283jAtwEeR_gzlcrKCUM",
                'describe' => "Designing and developing backend systems for web using MySQL|Sorting through data for 100+ car types available|Performing checks and validation for each car's data|Implementing the relationship between model data and car types using Eloquent in Laravel"
            ),
            array(
                'job_name' => "Practice Assistant of Software Engineering Practicum",
                'company_name' => "Diponegoro University",
                'month_start' => '2023-02-01',
                'month_end' => '2023-06-01',
                'company_photo' => "https://media.licdn.com/dms/image/C510BAQFI_av2w4QvAQ/company-logo_200_200/0/1631346451698?e=1723680000&v=beta&t=WP_ydafq-otPy_BXfGntl1FQy_niq29CcXoP2wvrrxQ",
                'describe' => "Guiding students in preparing Software functional and non-functional Requirement Specification documents|Provide students with an understanding of modelling and requirements analysis using diagrams in software design|Assist students in understanding object-oriented design techniques using the Unified Modeling Language (UML) in software design"
            ),
            array(
                'job_name' => "Practice Assistant of Database System Practicum",
                'company_name' => "Diponegoro University",
                'month_start' => '2023-09-01',
                'month_end' => '2023-12-01',
                'company_photo' => "https://media.licdn.com/dms/image/C510BAQFI_av2w4QvAQ/company-logo_200_200/0/1631346451698?e=1723680000&v=beta&t=WP_ydafq-otPy_BXfGntl1FQy_niq29CcXoP2wvrrxQ",
                'describe' => "Provide students with an understanding of MySQL and Oracle Database|Explain and apply the use of Oracle Database in Java EE Netbeans programme"
            ),
            array(
                'job_name' => "Fullstack Web Developer",
                'company_name' => "PT ADS Digital Partner Surabaya",
                'month_start' => '2024-02-01',
                'month_end' => '2024-06-01',
                'company_photo' => "https://media.licdn.com/dms/image/C560BAQFnyUwWm1LDKA/company-logo_200_200/0/1648799905094/pt_adma_digital_solusi_logo?e=1723680000&v=beta&t=u6HpIFgiY0JWeCB0f99bMuWrFkjPd7r2gcTYkuVGAZw",
                'describe' => "Development of a financial management system for the Admin website using Laravel and MySQL|Collaborate with backend engineers for database integration|Collaborate using Gitlab"
            )
        );

        foreach ($experiences as $index => $experience) {
            Experience::create([
                'job_name' => $experience['job_name'],
                'company_name' => $experience['company_name'],
                'month_start' => $experience['month_start'],
                'month_end' => $experience['month_end'],
                'company_photo' => $experience['company_photo'],
                'describe' => $experience['describe'],
            ]);
        }
    }
}
