<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $news = [
            [
                'title' => 'PAAB Announces 2025 Practising Certificate Renewal Deadline',
                'excerpt' => 'All registered practitioners are reminded that the deadline for renewing practising certificates for 2025 is 31st December 2024. Late renewals will attract penalties.',
                'content' => "The Public Accountants and Auditors Board (PAAB) wishes to remind all registered practitioners that the deadline for renewing practising certificates for 2025 is 31st December 2024.\n\nPractitioners who fail to renew their certificates on time will be removed from the register and will not be authorized to practice until their certificates are renewed. Late renewals will also attract penalties as follows:\n\n- January: 10% penalty\n- February: 20% penalty\n- March onwards: 30% penalty\n\nTo renew your certificate, please download the renewal form from our website and submit it along with the required documents and payment.\n\nFor any queries, please contact our licensing department at licensing@paab.org.zw or call +263 24 2795767.",
                'category' => 'announcement',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'New Sustainability Reporting Standards Implementation Roadmap Released',
                'excerpt' => 'PAAB has released a draft roadmap for the implementation of IFRS Sustainability Disclosure Standards (IFRS S1 and IFRS S2) in Zimbabwe.',
                'content' => "PAAB is pleased to announce the release of the Sustainability Reporting Implementation Roadmap for public consultation.\n\nThe roadmap outlines Zimbabwe's proposed approach for adopting the IFRS Sustainability Disclosure Standards (IFRS S1 and IFRS S2). This draft sets out the phased implementation timelines, reporting expectations, assurance requirements, and transitional exemptions.\n\nKey highlights include:\n- Phased implementation for different categories of entities\n- Progressive transition from voluntary adoption to full compliance\n- Guidance on disclosure scope, data readiness and assurance requirements\n- Stakeholder consultation timelines\n\nWe welcome feedback from preparers, auditors, regulators, investors and other stakeholders. Comments can be submitted to standards@paab.org.zw.",
                'category' => 'regulation',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'PAAB Workshop on IFRS 17 Insurance Contracts',
                'excerpt' => 'Join us for a comprehensive workshop on IFRS 17 Insurance Contracts implementation. The workshop will be held on 15th January 2025 at Rainbow Towers, Harare.',
                'content' => "PAAB in collaboration with ICAZ is hosting a workshop on IFRS 17 Insurance Contracts.\n\nDate: 15th January 2025\nVenue: Rainbow Towers, Harare\nTime: 8:00 AM - 4:00 PM\n\nTopics to be covered:\n- Overview of IFRS 17 requirements\n- Measurement models\n- Presentation and disclosure\n- Practical implementation challenges\n- Case studies\n\nThe workshop is open to all registered practitioners, insurance industry professionals, and interested parties. CPD hours will be awarded to participants.\n\nRegistration fee: USD 150\n\nTo register, please email education@paab.org.zw or call our office.",
                'category' => 'event',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'Audit Quality Monitoring Report 2024 Published',
                'excerpt' => 'The PAAB has published its annual Audit Quality Monitoring Report for 2024, highlighting key findings from practice reviews conducted during the year.',
                'content' => "The Public Accountants and Auditors Board has published its annual Audit Quality Monitoring Report for 2024.\n\nThe report provides insights into the quality of audits performed by registered audit firms and highlights common areas requiring improvement.\n\nKey findings include:\n- Overall improvement in audit documentation\n- Areas requiring attention in risk assessment procedures\n- Recommendations for enhanced quality control\n\nThe full report is available for download on our website under the Resources section.\n\nPAAB remains committed to promoting audit quality and protecting the public interest through effective oversight of the profession.",
                'category' => 'publication',
                'is_featured' => true,
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'ADP Registration Now Open for 2025 Intake',
                'excerpt' => 'PAAB invites applications for the Audit Development Programme (ADP) 2025 intake. The deadline for applications is 28th February 2025.',
                'content' => "PAAB is now accepting applications for the Audit Development Programme (ADP) 2025 intake.\n\nThe ADP is a period of specialization undertaken by professional accountants who want to become Registered Auditors.\n\nRequirements:\n- Qualified under constituent body examination\n- Registered Public Accountant with PAAB\n- Operating at audit executive level\n- PAO letter of good standing\n\nApplication deadline: 28th February 2025\n\nDownload the application form from our website and submit to adp@paab.org.zw along with the required documents and proof of payment.",
                'category' => 'training',
                'is_featured' => false,
                'is_published' => true,
                'published_at' => now()->subDays(14),
            ],
        ];

        foreach ($news as $item) {
            News::create($item);
        }
    }
}