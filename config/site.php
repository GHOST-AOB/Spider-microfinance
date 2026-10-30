<?php
// ============================================================
// config/site.php
// Brand, profile, factual data and contact information for
// Spider Microfinance (Uganda).
// Sourced strictly from spider-microfinance-profile-expanded.
// All bracketed items [...] are neutral placeholders as instructed.
// ============================================================

$site_config = [
    'name'           => 'Spider Microfinance',
    'legal_name'     => 'Spider Microfinance Limited',
    'tagline'        => 'Weaving stronger communities, one loan at a time.',
    'founded'        => '[year]',
    'headquarters'   => '[town/city, Uganda]',
    'regulatory_act' => 'Tier 4 Microfinance Institutions and Money Lenders Act, 2016',
    'regulator'      => 'Uganda Microfinance Regulatory Authority (UMRA)',
    'licence_status' => '[Confirm licence/registration number and status]',
    'mission'        => 'To provide accessible, affordable and responsible financial services that empower low-income Ugandans to grow their businesses, build assets and improve their livelihoods.',
    'vision'         => 'A financially inclusive Uganda where every entrepreneur, farmer and household has the means to build a secure and prosperous future.',
    'background'     => 'Spider Microfinance is a Uganda-based microfinance institution that provides affordable credit and savings services to individuals and small businesses underserved by commercial banks. Our name reflects our approach: like a spider\'s web, we weave together communities, savings groups, traders, farmers and families into a network of shared financial strength.',
    'who_we_serve'   => 'Market vendors, smallholder farmers, boda-boda operators, salon owners, teachers, women\'s groups and other micro and small entrepreneurs across Uganda.',
];

// Strategic Goals from Section 4
$strategic_goals = [
    [
        'icon'        => 'fa-users',
        'title'       => 'Expand Financial Inclusion',
        'description' => 'Reach [target, e.g. 50,000] active clients by [year], with at least 60% women and a growing share of rural and youth clients.',
        'metric'      => '60%+',
        'metric_sub'  => 'Women & Youth Target',
    ],
    [
        'icon'        => 'fa-chart-line',
        'title'       => 'Support Business Growth',
        'description' => 'Help clients grow their incomes through well-sized loans, repeat-loan progression and basic business training.',
        'metric'      => '8',
        'metric_sub'  => 'Tailored Loan Products',
    ],
    [
        'icon'        => 'fa-piggy-bank',
        'title'       => 'Promote a Savings Culture',
        'description' => 'Encourage every borrower to save regularly, building a cushion against emergencies.',
        'metric'      => '100%',
        'metric_sub'  => 'Borrower Savings Focus',
    ],
    [
        'icon'        => 'fa-shield-halved',
        'title'       => 'Maintain a Healthy Portfolio',
        'description' => 'Keep portfolio-at-risk (30 days) below [5%] through careful appraisal, client follow-up and flexible repayment support.',
        'metric'      => '< 5%',
        'metric_sub'  => 'Target PAR30',
    ],
    [
        'icon'        => 'fa-mobile-screen',
        'title'       => 'Go Digital',
        'description' => 'Offer mobile money disbursement and repayment, plus digital record-keeping, to cut costs and travel time for clients.',
        'metric'      => '24/7',
        'metric_sub'  => 'MTN & Airtel MoMo',
    ],
    [
        'icon'        => 'fa-seedling',
        'title'       => 'Operate Sustainably',
        'description' => 'Reach and keep operational self-sufficiency so we can serve clients for the long term.',
        'metric'      => '100%',
        'metric_sub'  => 'Sustainable Operations',
    ],
    [
        'icon'        => 'fa-scale-balanced',
        'title'       => 'Protect Clients',
        'description' => 'Uphold transparent pricing, ethical collections and clear complaint-handling at every branch.',
        'metric'      => 'Tier 4',
        'metric_sub'  => 'UMRA Regulatory Oversight',
    ],
];

// Core Values from Section 5
$core_values = [
    [
        'icon'        => 'fa-handshake',
        'name'        => 'Integrity',
        'description' => 'We are honest in pricing, contracts and dealings. No hidden charges.',
    ],
    [
        'icon'        => 'fa-heart',
        'name'        => 'Customer Focus',
        'description' => 'Our clients\' success is our success. We listen, advise and tailor products to their needs.',
    ],
    [
        'icon'        => 'fa-door-open',
        'name'        => 'Inclusion',
        'description' => 'We serve women, youth, rural communities and first-time borrowers with dignity.',
    ],
    [
        'icon'        => 'fa-eye',
        'name'        => 'Transparency',
        'description' => 'Interest rates, fees and repayment schedules are explained clearly before any loan is signed.',
    ],
    [
        'icon'        => 'fa-people-group',
        'name'        => 'Community',
        'description' => 'We build on the strength of groups, trust and local relationships.',
    ],
    [
        'icon'        => 'fa-award',
        'name'        => 'Responsibility',
        'description' => 'We lend prudently and avoid over-indebting clients.',
    ],
    [
        'icon'        => 'fa-user-tie',
        'name'        => 'Professionalism',
        'description' => 'We deliver quick, respectful and accurate service.',
    ],
    [
        'icon'        => 'fa-lightbulb',
        'name'        => 'Innovation',
        'description' => 'We keep improving our products and use technology to make finance easier.',
    ],
];

// Supporting Services from Profile Pack
$supporting_services = [
    [
        'icon'        => 'fa-wallet',
        'title'       => 'Savings Services',
        'description' => 'Voluntary and compulsory savings for borrowers, building emergency cushions and group security cushions. [Confirm whether deposit-taking is permitted under licence; if not, describe as savings groups or compulsory loan security savings].',
    ],
    [
        'icon'        => 'fa-graduation-cap',
        'title'       => 'Financial Literacy & Training',
        'description' => 'Free or subsidised business training, budgeting skills, and record-keeping mentorship for individual clients, women\'s groups, and youth cooperatives.',
    ],
    [
        'icon'        => 'fa-mobile-screen-button',
        'title'       => 'Mobile Money Repayments',
        'description' => 'Convenient loan disbursement and instalment repayments directly through MTN Mobile Money and Airtel Money, cutting transport costs and queues.',
    ],
];

// General Eligibility and Requirements from Profile Pack
$general_eligibility = [
    'Ugandan national ID (or other valid ID / LC1 letter if pending), age 18+.',
    'Active business or regular verifiable income source.',
    'Recommendation from a local council (LC1) chairperson or group guarantor.',
    'Collateral, guarantors or group guarantee as required by loan type.',
    'Passport photos and a completed Spider Microfinance application form.',
];

// 5-Step Application Process from Profile Pack
$how_to_apply_steps = [
    [
        'step'        => '01',
        'icon'        => 'fa-location-dot',
        'title'       => 'Connect with Us',
        'description' => 'Visit a Spider Microfinance branch or contact a loan officer in your area for a free consultation on loan products.',
    ],
    [
        'step'        => '02',
        'icon'        => 'fa-file-lines',
        'title'       => 'Submit Application',
        'description' => 'Submit your application form, national ID/LC1 letter, passport photos, and simple business plan prepared with our guidance.',
    ],
    [
        'step'        => '03',
        'icon'        => 'fa-house-circle-check',
        'title'       => 'Appraisal Visit',
        'description' => 'A friendly loan officer visits your home or business to understand your cash flow and tailor loan size and repayment schedule.',
    ],
    [
        'step'        => '04',
        'icon'        => 'fa-clipboard-check',
        'title'       => 'Review & Transparent Offer',
        'description' => 'Loan committee reviews the application. All terms, schedules, fees, and obligations are explained transparently with no hidden fees.',
    ],
    [
        'step'        => '05',
        'icon'        => 'fa-money-bill-transfer',
        'title'       => 'Disbursement & Growth',
        'description' => 'Sign agreement and receive funds quickly via cash or mobile money (MTN / Airtel), followed by regular mentoring check-ins.',
    ],
];

// Contact Details from Section 7 of Profile Pack (Placeholders preserved)
$contact_info = [
    'head_office'    => '[Plot no., street, town/city], Uganda',
    'postal_address' => 'P.O. Box [number], [town], Uganda',
    'phone'          => '[+256 XXX XXX XXX]',
    'whatsapp_momo'  => '[+256 XXX XXX XXX]',
    'email'          => 'info@spidermicrofinance.example',
    'website'        => 'www.spidermicrofinance.example',
    'working_hours'  => 'Monday–Friday [8:00 am – 5:00 pm]; Saturday [8:00 am – 1:00 pm]',
    'branches'       => [
        [
            'name'     => 'Head Office',
            'location' => '[Plot no., street, town/city], Uganda',
            'phone'    => '[+256 XXX XXX XXX]',
            'type'     => 'Main Branch & Administration',
        ],
        [
            'name'     => 'Branch 2',
            'location' => '[town/city location, Uganda]',
            'phone'    => '[+256 XXX XXX XXX]',
            'type'     => 'Community Branch',
        ],
        [
            'name'     => 'Branch 3',
            'location' => '[town/city location, Uganda]',
            'phone'    => '[+256 XXX XXX XXX]',
            'type'     => 'Community Branch',
        ],
    ],
    'complaints'     => [
        'email'      => 'complaints@spidermicrofinance.example',
        'procedure'  => 'Clients may raise complaints at any branch, by phone or by email. If a complaint is not resolved satisfactorily, clients may escalate it to the Uganda Microfinance Regulatory Authority (UMRA).',
        'regulator'  => 'Uganda Microfinance Regulatory Authority (UMRA)',
    ],
];

$social_links = [
    ['icon' => 'fab fa-facebook-f',  'label' => 'Facebook',  'url' => '#'],
    ['icon' => 'fab fa-x-twitter',   'label' => 'X/Twitter', 'url' => '#'],
    ['icon' => 'fab fa-instagram',   'label' => 'Instagram', 'url' => '#'],
    ['icon' => 'fab fa-whatsapp',    'label' => 'WhatsApp',  'url' => 'https://wa.me/256000000000'],
];
