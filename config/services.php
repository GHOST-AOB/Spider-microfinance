<?php
// ============================================================
// config/services.php
// Complete database of 8 loan products offered by Spider Microfinance
// Faithfully extracted from spider-microfinance-profile-expanded
// All bracketed details [...] represent neutral placeholders
// ============================================================

$services = [
    [
        'id' => 1,
        'slug' => 'group-loans',
        'title' => 'Group Loans',
        'full_title' => '6.1 Group Loans (Solidarity / Village Group Lending)',
        'tagline' => 'Strength in numbers: small loans, shared responsibility, shared success.',
        'best_for' => 'Women\'s, youth and market groups',
        'icon' => 'fa-users',
        'badge' => 'Community Group Lending',
        'category' => 'community',
        'image' => 'assets/images/group-loans.jpg',
        'url' => 'services/group-loans.php',
        'loan_size' => '5 to 30 members [confirm]',
        'term' => '[3 – 12] months',
        'overview' => [
            'The Group Loan is Spider Microfinance\'s flagship community product and the closest expression of our \'web\' philosophy. Instead of requiring individual collateral, the loan is built on trust between neighbours: members of a registered or recognised group guarantee one another, meet regularly, and support each member to repay on time. Each member receives an individual loan sized to their own business, while the group provides the social guarantee.',
            'This product was designed for people who are often excluded from formal credit because they own no land titles, have no payslips and keep no formal books. For many members it is their first access to a loan, and the discipline of weekly meetings, savings and shared accountability becomes a stepping stone towards larger individual loans.',
        ],
        'who_for' => [
            'Women\'s groups, village savings and credit groups (VSLAs), and church or mosque-based self-help groups.',
            'Market vendors\' associations, such as groups of tomato, fish, charcoal or second-hand clothes traders.',
            'Youth groups running small enterprises such as brick-making, tailoring, bakery or car-wash businesses.',
            'Farmer groups and cooperatives that need small working-capital loans for members.',
        ],
        'glance' => [
            [
                'feature' => 'Group size',
                'details' => '5 to 30 members [confirm]',
            ],
            [
                'feature' => 'Loan size per member',
                'details' => 'UGX [50,000 – 2,000,000], rising with each successful cycle',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[3 – 12] months',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Weekly or fortnightly, collected at the group meeting [confirm]',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month on a [reducing / flat] balance',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Application fee [x]%; insurance [x]%; no hidden charges',
            ],
            [
                'feature' => 'Security',
                'details' => 'Group guarantee plus compulsory savings of [10–20]% of the loan',
            ],
            [
                'feature' => 'Grace period',
                'details' => 'Up to [1] repayment period for seasonal businesses',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'Mobile money or cash at the branch or group meeting',
            ],
        ],
        'can_use_for' => [
            'Buying stock for a market stall, kiosk or small shop.',
            'Purchasing raw materials such as fabric, flour, timber or hair products.',
            'Buying small equipment such as sewing machines, cooking stoves or hand tools.',
            'Paying for rent or licences linked to the business.',
            'Starting or expanding a small poultry, piggery or vegetable enterprise.',
        ],
        'not_permitted' => 'Not permitted: Weddings, funerals, alcohol or gambling. Repaying other loans, unless approved by the loan officer. Lending the money on to others at higher interest.',
        'eligibility' => [
            'Aged 18 or above and resident in the group\'s community for at least [6–12] months.',
            'Member of a group in good standing, with the group agreeing to the loan collectively.',
            'Running, or about to start, a viable income-generating activity.',
            'Willing to attend training and regular repayment meetings.',
            'No outstanding default with Spider Microfinance or any other lender.',
        ],
        'documents' => [
            'Valid national ID, or LC1 letter and passport photo if the ID is pending.',
            'Group registration or recommendation letter from the LC1 chairperson or sub-county community development office.',
            'Group constitution, member list and minutes approving the loan.',
            'Completed application form and signed group guarantee agreement.',
            'Two passport photographs per member.',
        ],
        'security' => [
            'Joint group guarantee: each member is responsible for encouraging repayment by every other member.',
            'Compulsory savings held by Spider Microfinance as partial security.',
            'Where a member defaults, the group is asked to resolve the arrears before new loans are released to anyone in the group.',
        ],
        'process' => [
            'Pre-loan orientation: a loan officer visits the group and explains terms, rates, rights and responsibilities.',
            'Group formation and training: members complete a short course on budgeting, savings and group discipline.',
            'Application: each member lists their business and the amount needed; the group agrees on the loan amounts.',
            'Appraisal: the loan officer visits each business to verify its income and needs.',
            'Approval by the loan committee, normally within [3–7] working days.',
            'Signing: loan agreements are signed in front of the group, and terms are read out in a local language where needed.',
            'Disbursement through mobile money or at the branch, followed by regular group meetings for repayment.',
        ],
        'repayment_terms' => [
            'Repayments are made weekly or fortnightly at the group meeting or by mobile money to Spider Microfinance\'s till or paybill [confirm].',
            'Members receive a receipt or SMS confirmation for every payment.',
            'Early repayment is allowed with no penalty [confirm], and interest is charged only up to the date of settlement under a reducing-balance method [confirm].',
            'Late payments attract a penalty of [x]% of the overdue instalment per [week/month], capped at [x]% of the loan [confirm].',
        ],
        'benefits' => [
            'No individual collateral required.',
            'Larger loans after each successful cycle, which rewards good repayment.',
            'Built-in savings culture and peer support.',
            'Training in business and financial management.',
            'Lower travel costs because staff come to the group.',
            'Builds a credit history that opens the door to individual and asset loans.',
        ],
        'responsibilities' => [
            'Attend all meetings and pay on time; one late member affects the whole group.',
            'Choose members carefully and only join people you trust.',
            'Never use another member\'s loan or share your own PIN or mobile money details.',
            'Report any problem early. A loan officer can often help restructure before arrears build up.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Nakato\'s vegetable stall',
            'story' => 'Nakato belongs to a 15-member women\'s group in a trading centre. She receives UGX 500,000 to buy vegetables in bulk from the wholesale market and add a charcoal-stove cooking-stand to her stall.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 500,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '6 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '2.5% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 75,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 575,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '6',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 95,833',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'What happens if one member cannot pay?',
                'a' => 'The group meets first to find a solution, such as members helping temporarily. The loan officer can also advise on rescheduling. Persistent arrears may delay new loans for the whole group.',
            ],
            [
                'q' => 'Can I leave the group during a loan?',
                'a' => 'You may leave only after your own loan is fully repaid and the group has agreed.',
            ],
            [
                'q' => 'Can I get a bigger loan next time?',
                'a' => 'Yes. Members with a clean repayment record normally qualify for a higher amount in the next cycle, subject to appraisal.',
            ],
            [
                'q' => 'Do I need to have savings first?',
                'a' => 'Compulsory savings are collected with the loan, so you do not need a large amount beforehand, but regular savings strengthen your application.',
            ],
        ],
        'page_title' => 'Group Loans – Spider Microfinance Uganda',
        'page_description' => 'Strength in numbers: small loans, shared responsibility, shared success. The Group Loan is Spider Microfinance\'s flagship community product and the closest expression of our \'web\' philosophy. Instead of requiring individual collateral, the loan is built on trust between neighbours: members of a registered or recognised group guarantee one another, meet regularly, and support each member to repay on time. Each member receives an individual loan sized to their own business, while the group provides the social guarantee.',
        'page_keywords' => 'group loans, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
    [
        'id' => 2,
        'slug' => 'individual-business-loans',
        'title' => 'Individual Business Loans',
        'full_title' => '6.2 Individual Business Loans',
        'tagline' => 'Capital for established entrepreneurs ready to take the next step.',
        'best_for' => 'Established small businesses',
        'icon' => 'fa-store',
        'badge' => 'Established SMEs',
        'category' => 'business',
        'image' => 'assets/images/business-loans.jpg',
        'url' => 'services/individual-business-loans.php',
        'loan_size' => 'UGX [500,000 – 20,000,000]',
        'term' => '[6 – 24] months',
        'overview' => [
            'The Individual Business Loan is for entrepreneurs who have outgrown group lending. It is suited to owners of established small and medium enterprises who need larger sums, longer terms and flexible repayment schedules shaped by the cash flow of the business.',
            'Rather than relying only on a guarantee from a group, the loan is secured with business or personal assets and is assessed on the strength of the business: its sales, expenses, stock, customers and the owner\'s track record. Our loan officers visit the business, review the records, and work with the owner to size the loan so that it can be repaid comfortably from business income.',
        ],
        'who_for' => [
            'Shop owners, wholesalers and retailers with a stable customer base.',
            'Artisans and service providers such as welders, carpenters, salon owners, restaurant owners and mechanics.',
            'Market traders who deal in higher volumes of stock.',
            'Small manufacturers and agro-processors, for example maize millers, bakeries and cottage industries.',
            'Existing Spider Microfinance group-loan graduates who have repaid at least [two] cycles successfully.',
        ],
        'glance' => [
            [
                'feature' => 'Loan size',
                'details' => 'UGX [500,000 – 20,000,000]',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[6 – 24] months',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Monthly (weekly option for high-turnover businesses) [confirm]',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month on a [reducing] balance',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Application fee [x]%; appraisal fee [x]%; insurance [x]%; legal/registration fees where collateral is registered',
            ],
            [
                'feature' => 'Security',
                'details' => 'Movable or immovable assets, guarantors, or a combination',
            ],
            [
                'feature' => 'Grace period',
                'details' => 'Up to [1–2] months for expansion or construction projects [confirm]',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'Bank transfer, mobile money or cheque',
            ],
        ],
        'can_use_for' => [
            'Working capital: buying stock, raw materials and packaging.',
            'Purchasing equipment, tools or machinery.',
            'Renovating or expanding business premises.',
            'Opening a second outlet or stall.',
            'Bulk purchasing to take advantage of supplier discounts.',
            'Business-related licences, rent and insurance.',
        ],
        'not_permitted' => 'Not permitted: Personal consumption or luxury items. Speculative investments, gambling or unlicensed activities. Land purchase, unless specifically agreed and linked to the business.',
        'eligibility' => [
            'Aged 18 to [65] years, a Ugandan resident.',
            'Business operating for at least [6–12] months at the same or a related activity.',
            'Business must show regular income and the ability to repay from its cash flow.',
            'Clean credit record, with a clear CRB check where applicable.',
            'Business location verified by a field visit.',
            'Must not be over-indebted with other lenders.',
        ],
        'documents' => [
            'National ID of the borrower and each guarantor.',
            'Trading licence, business registration certificate, or LC1/market-authority letter.',
            'Last [3–6] months of business records, mobile money statements or bank statements.',
            'Proof of residence, such as an LC1 letter or utility bill.',
            'Collateral documents: sales agreement, logbook, land title or valuation as applicable.',
            'Two passport photographs for borrower and guarantors.',
            'TIN certificate for larger loans [confirm].',
        ],
        'security' => [
            'Movable assets: motorcycles, vehicles, machinery, household items with a written chattel arrangement.',
            'Immovable assets: land titles or customary-land agreements with LC and clan approval.',
            'Guarantors: [one or two] salaried or business persons who sign a guarantee agreement.',
            'Pledged stock or equipment, documented and photographed by a loan officer.',
            'Compulsory savings of [10]% of the loan [confirm].',
            'Security is released as soon as the loan is cleared.',
        ],
        'process' => [
            'Enquiry and pre-qualification with a loan officer.',
            'Submission of the application form and supporting documents.',
            'Business appraisal visit: the officer reviews stock, records, sales and expenses, and meets the guarantors.',
            'Cash-flow analysis to set a loan amount and instalment the business can afford.',
            'Credit committee review and decision, typically within [3–7] working days.',
            'Loan offer letter explaining the amount, rate, fees, schedule and security.',
            'Signing of the agreement and registration of security.',
            'Disbursement and a follow-up visit within [30] days to check how the funds are being used.',
        ],
        'repayment_terms' => [
            'Monthly or weekly instalments set around the business\'s cash-flow pattern.',
            'Payments via mobile money, bank deposit or at the branch with immediate receipts.',
            'Early repayment allowed, with an early-settlement fee of [x]% [confirm].',
            'Late-payment penalty of [x]% on the overdue amount, with a written reminder before any enforcement.',
            'Restructuring may be considered if the business suffers a temporary shock, subject to approval.',
        ],
        'benefits' => [
            'Larger amounts and longer terms than group loans.',
            'Repayment tailored to the cash flow of the business.',
            'Personalised advice from a dedicated loan officer.',
            'Access to bigger repeat loans for businesses that perform well.',
            'Builds a formal credit record that can support later bank borrowing.',
        ],
        'responsibilities' => [
            'Keep simple daily records of sales and expenses.',
            'Use the loan only for the stated business purpose.',
            'Inform the loan officer early about any change in business, residence or contact details.',
            'Avoid taking on additional debt while repaying.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Okello\'s hardware shop',
            'story' => 'Okello runs a hardware shop in a town centre. He borrows UGX 5,000,000 to buy cement, iron sheets and paint in bulk ahead of the building season, securing the loan with his motorcycle logbook and one guarantor.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 5,000,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '12 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '2.5% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 1,500,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 6,500,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '12',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 541,667',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'How quickly can I get the loan?',
                'a' => 'After a complete application and field appraisal, a decision is usually made within [3–7] working days. Large loans or those with land security may take longer.',
            ],
            [
                'q' => 'Can I use my land title as security?',
                'a' => 'Yes. The title or customary-land agreement is registered or lodged as agreed, and returned to you once the loan is fully repaid.',
            ],
            [
                'q' => 'Can I take a second loan before finishing the first?',
                'a' => 'A top-up may be possible for clients with a clean repayment record, subject to appraisal.',
            ],
            [
                'q' => 'What if my business has a bad season?',
                'a' => 'Speak to your loan officer immediately. Options such as rescheduling may be available.',
            ],
        ],
        'page_title' => 'Individual Business Loans – Spider Microfinance Uganda',
        'page_description' => 'Capital for established entrepreneurs ready to take the next step. The Individual Business Loan is for entrepreneurs who have outgrown group lending. It is suited to owners of established small and medium enterprises who need larger sums, longer terms and flexible repayment schedules shaped by the cash flow of the business.',
        'page_keywords' => 'individual business loans, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
    [
        'id' => 3,
        'slug' => 'agricultural-loans',
        'title' => 'Agricultural Loans',
        'full_title' => '6.3 Agricultural Loans',
        'tagline' => 'Financing that moves with the seasons: from planting to harvest to market.',
        'best_for' => 'Farmers, agro-processors, produce traders',
        'icon' => 'fa-wheat-awn',
        'badge' => 'Seasonal Agribusiness',
        'category' => 'agriculture',
        'image' => 'assets/images/agricultural-loans.jpg',
        'url' => 'services/agricultural-loans.php',
        'loan_size' => 'UGX [300,000 – 15,000,000]',
        'term' => '[4 – 18] months, depending on the crop or livestock cycle',
        'overview' => [
            'Agriculture employs most Ugandans, yet farmers are among the hardest to finance because their income arrives in lumps at harvest, while costs arrive at planting. The Agricultural Loan is built around this reality. Repayment schedules are aligned with the crop or livestock cycle, with grace periods and balloon payments timed for when income is expected.',
            'The product supports the whole value chain: input purchase, production, post-harvest handling, storage, processing and trading. Our agricultural loan officers are trained to assess farm income, weather and market risk, and to advise on good practices that raise yields and protect the borrower.',
        ],
        'who_for' => [
            'Smallholder farmers growing food and cash crops such as maize, beans, coffee, bananas, cassava, rice, vegetables and horticulture.',
            'Poultry, piggery, dairy, goat and fish farmers.',
            'Agro-processors, such as small millers, honey processors and juice makers.',
            'Produce traders and aggregators who buy from farmers and sell to markets or processors.',
            'Farmer groups and cooperatives seeking inputs or storage.',
        ],
        'glance' => [
            [
                'feature' => 'Loan size',
                'details' => 'UGX [300,000 – 15,000,000]',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[4 – 18] months, depending on the crop or livestock cycle',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Monthly, quarterly, or a single or two-stage repayment at harvest [confirm]',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month on a [reducing] balance',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Application fee [x]%; crop or livestock insurance premium where applicable',
            ],
            [
                'feature' => 'Security',
                'details' => 'Farm assets, livestock, produce in storage, guarantors, group guarantee',
            ],
            [
                'feature' => 'Grace period',
                'details' => 'Up to [2–6] months, depending on the crop\'s time to harvest',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'In cash, via mobile money, or directly to approved input suppliers',
            ],
        ],
        'can_use_for' => [
            'Improved seed, seedlings, fertiliser, herbicides and pesticides.',
            'Hired labour for land preparation, weeding and harvesting.',
            'Purchase of livestock, poultry, feed and veterinary services.',
            'Irrigation equipment, water tanks, tools and small machinery.',
            'Drying, storage, packaging, transport and processing.',
            'Fish ponds, fingerlings and feed.',
        ],
        'not_permitted' => 'Not permitted: Buying land, unless agreed separately. Non-farm personal spending. Illegal crops or activities.',
        'eligibility' => [
            'Aged 18 or above, with access to farmland through ownership, family land or a lease of at least the loan period.',
            'Farming experience of at least [1–2] seasons.',
            'Evidence of a market for the produce, such as a buyer, cooperative or local market.',
            'Able to demonstrate that farm income, plus other income, can repay the loan.',
            'Clean credit record.',
        ],
        'documents' => [
            'National ID and LC1 recommendation letter.',
            'Proof of land access: title, customary-land agreement or lease or landowner consent letter.',
            'Farm plan or simple budget, which a loan officer will help to prepare.',
            'Letter or membership card from a farmer group or cooperative, if applicable.',
            'Purchase contract or letter of intent from a buyer, where available.',
            'Passport photographs and signed application form.',
        ],
        'security' => [
            'Farm assets such as livestock, equipment and stored produce under a documented pledge.',
            'Warehouse receipts where produce is stored in an approved facility [confirm].',
            'Group guarantee for farmer groups.',
            'Personal guarantor, such as a salaried or business person.',
            'Compulsory savings or crop or livestock insurance where available [confirm].',
        ],
        'process' => [
            'Field officer visits the farm to confirm land access, crops or livestock and expected yields.',
            'Joint preparation of a simple farm budget and cash-flow plan.',
            'Loan sizing based on acreage, enterprise costs and expected income.',
            'Credit committee approval, aiming to disburse before the planting or stocking season starts.',
            'Signing and disbursement, preferably staged: input funds first and labour funds later.',
            'Follow-up visits during the season to monitor progress and give advice.',
            'Repayment at harvest or as scheduled, with support to access markets where possible.',
        ],
        'repayment_terms' => [
            'Repayment schedule matched to the harvest: monthly for ongoing enterprises such as poultry or dairy, or lump-sum or two-stage payments for seasonal crops.',
            'Grace period before first repayment for crops that take several months to mature.',
            'If drought, floods, pests or disease cause crop failure, the borrower must notify the officer immediately. Rescheduling may be considered after assessment [confirm].',
        ],
        'benefits' => [
            'Repayment plans that follow the farming calendar.',
            'Grace periods that protect you while crops mature.',
            'Direct payment to input suppliers to reduce the risk of misuse.',
            'Agronomic and livestock advice from trained staff.',
            'Optional insurance against drought or livestock loss [confirm].',
            'Support to link with buyers, cooperatives and storage.',
        ],
        'responsibilities' => [
            'Use the loan for the agreed farming activity and buy quality inputs from approved suppliers.',
            'Plant and harvest on time and follow good agricultural practices.',
            'Keep records of costs, yields and sales.',
            'Do not sell the pledged produce without informing Spider Microfinance.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Mugisha\'s maize and beans plot',
            'story' => 'Mugisha farms two acres. He borrows UGX 2,000,000 for certified seed, fertiliser and labour. With a [3]-month grace period, he repays in two instalments after the harvest and sale of his crop.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 2,000,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '6 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '2% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 240,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 2,240,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '2',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 1,120,000',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'What if the rains fail?',
                'a' => 'Contact your loan officer immediately. After a field check, rescheduling or a partial relief arrangement may be considered, depending on circumstances and insurance cover.',
            ],
            [
                'q' => 'Can I get the loan in inputs rather than cash?',
                'a' => 'Yes. Funds can be paid directly to approved agro-dealers so that inputs are bought as planned.',
            ],
            [
                'q' => 'Do I need a title for my land?',
                'a' => 'No. Family land with a consent letter, a customary-land agreement or a lease can be accepted with other security.',
            ],
            [
                'q' => 'Can I borrow for livestock?',
                'a' => 'Yes. Loans for poultry, goats, pigs, dairy cows and fish farming are offered with terms suited to each enterprise.',
            ],
        ],
        'page_title' => 'Agricultural Loans – Spider Microfinance Uganda',
        'page_description' => 'Financing that moves with the seasons: from planting to harvest to market. Agriculture employs most Ugandans, yet farmers are among the hardest to finance because their income arrives in lumps at harvest, while costs arrive at planting. The Agricultural Loan is built around this reality. Repayment schedules are aligned with the crop or livestock cycle, with grace periods and balloon payments timed for when income is expected.',
        'page_keywords' => 'agricultural loans, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
    [
        'id' => 4,
        'slug' => 'salary-loans',
        'title' => 'Salary Loans',
        'full_title' => '6.4 Salary Loans',
        'tagline' => 'Fast, affordable credit for people with a steady paycheque.',
        'best_for' => 'Employees with a regular salary',
        'icon' => 'fa-money-check-dollar',
        'badge' => 'Steady Paycheque',
        'category' => 'personal',
        'image' => 'assets/images/salary-loans.jpg',
        'url' => 'services/salary-loans.php',
        'loan_size' => 'Up to [x] times net monthly salary, subject to a maximum of UGX [x]',
        'term' => '[3 – 24] months',
        'overview' => [
            'The Salary Loan gives employees with a regular monthly income access to quick, dignified credit. Because repayment comes directly from the borrower\'s salary, through payroll deduction or a standing order, the risk to Spider Microfinance is lower and the product can be priced more affordably and processed faster than other loans.',
            'It is designed for teachers, nurses, clerks, security guards, police and army personnel, civil servants and employees of private companies, NGOs and schools. The loan helps people cover life\'s planned and unplanned expenses without resorting to informal moneylenders or high-cost digital loans.',
        ],
        'who_for' => [
            'Government employees, including teachers, health workers, local government staff and uniformed services.',
            'Employees of private companies, NGOs, schools, hospitals and hotels.',
            'Permanent and long-term contract staff with a verifiable payslip or bank statement.',
            'Pensioners with a regular pension income [confirm].',
        ],
        'glance' => [
            [
                'feature' => 'Loan size',
                'details' => 'Up to [x] times net monthly salary, subject to a maximum of UGX [x]',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[3 – 24] months',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Monthly, by payroll deduction or standing order',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month on a [reducing] balance',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Application fee [x]%; insurance [x]%; no hidden charges',
            ],
            [
                'feature' => 'Security',
                'details' => 'Salary assignment, employer confirmation and sometimes a guarantor',
            ],
            [
                'feature' => 'Debt-burden limit',
                'details' => 'Total deductions should not exceed [50–60]% of net salary [confirm]',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'Directly to the borrower\'s bank or mobile money account, normally within [24–72] hours after approval',
            ],
        ],
        'can_use_for' => [
            'Home improvement, such as roofing or furniture.',
            'Medical and emergency expenses.',
            'School fees and educational needs for family members.',
            'Buying household items, appliances or a laptop.',
            'Starting a side business or farming project.',
            'Paying rent deposits, transport and relocation costs.',
            'Consolidating costlier debts.',
        ],
        'not_permitted' => 'Not permitted: Gambling or illegal activities. Re-lending to others at interest.',
        'eligibility' => [
            'Employed for at least [6–12] months, or confirmed in a permanent post.',
            'Aged 18 to [60] years, and the loan must end before retirement or contract expiry.',
            'Net monthly salary of at least UGX [x].',
            'Salary paid regularly through a bank or verifiable channel.',
            'No history of default or active court cases on loans.',
        ],
        'documents' => [
            'National ID and passport photograph.',
            'Letter of employment or appointment letter.',
            'Last [3] payslips or [3–6] months of salary account statements.',
            'Employer\'s introduction or confirmation letter and salary-deduction authority form.',
            'Staff ID or work card.',
            'Proof of residence and next-of-kin details.',
            'Guarantor details, where required.',
        ],
        'security' => [
            'Irrevocable salary assignment, authorising the employer to deduct the instalment and remit it to Spider Microfinance.',
            'Employer confirmation of employment status.',
            'Guarantor, such as a colleague, relative or other person with a regular income, for larger amounts [confirm].',
            'Life or credit insurance that clears the loan in case of death or disability [confirm].',
        ],
        'process' => [
            'Enquire with a loan officer or visit a branch.',
            'Submit the form with the employment documents and payslips.',
            'Verification of employment and salary with the employer.',
            'Credit appraisal, including a debt-burden check and CRB search.',
            'Approval, usually within [1–3] working days.',
            'Signing of the agreement and salary-deduction mandate.',
            'Disbursement to the bank or mobile money account.',
        ],
        'repayment_terms' => [
            'Monthly deductions from salary, remitted by the employer to Spider Microfinance.',
            'If the salary is paid late, the borrower must pay the instalment directly to avoid penalties.',
            'Early settlement is allowed, with an early-settlement fee of [x]% [confirm].',
            'If employment ends, the outstanding balance falls due on the terms in the agreement, and Spider Microfinance will discuss repayment options with the borrower.',
        ],
        'benefits' => [
            'Quick approval and disbursement.',
            'Lower charges than most unsecured loans.',
            'No physical collateral needed.',
            'Convenient automatic repayment.',
            'Top-ups available once part of the loan is repaid [confirm].',
            'Helps build a strong credit history.',
        ],
        'responsibilities' => [
            'Check that your total monthly deductions remain affordable.',
            'Do not borrow beyond your needs.',
            'Tell Spider Microfinance if you change jobs or bank accounts.',
            'Keep your employer informed of any changes to the salary assignment.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Auma\'s classroom-to-home upgrade',
            'story' => 'Auma is a teacher earning a net monthly salary of UGX 900,000. She borrows UGX 3,000,000 to put a new roof on her house, repaid through monthly payroll deductions.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 3,000,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '12 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '2% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 720,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 3,720,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '12',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 310,000',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'Can I get a salary loan if I\'m on contract?',
                'a' => 'Yes, provided the contract runs at least as long as the loan term or is renewed regularly, and your employer confirms it [confirm].',
            ],
            [
                'q' => 'What if I lose my job?',
                'a' => 'Inform us immediately. Insurance or an alternative repayment plan may apply, depending on the agreement.',
            ],
            [
                'q' => 'Can I take a top-up loan?',
                'a' => 'Yes. After [3–6] months of good repayment you may qualify for a top-up, subject to your debt-burden limit.',
            ],
            [
                'q' => 'How is the loan amount decided?',
                'a' => 'It depends on net salary, existing deductions and the debt-burden limit.',
            ],
        ],
        'page_title' => 'Salary Loans – Spider Microfinance Uganda',
        'page_description' => 'Fast, affordable credit for people with a steady paycheque. The Salary Loan gives employees with a regular monthly income access to quick, dignified credit. Because repayment comes directly from the borrower\'s salary, through payroll deduction or a standing order, the risk to Spider Microfinance is lower and the product can be priced more affordably and processed faster than other loans.',
        'page_keywords' => 'salary loans, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
    [
        'id' => 5,
        'slug' => 'school-fees-loans',
        'title' => 'School Fees Loans',
        'full_title' => '6.5 School Fees Loans',
        'tagline' => 'Because no child\'s education should wait for the harvest or the paycheque.',
        'best_for' => 'Parents and guardians',
        'icon' => 'fa-graduation-cap',
        'badge' => 'Education Support',
        'category' => 'personal',
        'image' => 'assets/images/school-fees.jpg',
        'url' => 'services/school-fees-loans.php',
        'loan_size' => 'UGX [200,000 – 5,000,000]',
        'term' => '[3 – 9] months, or the length of the school term or year',
        'overview' => [
            'School fees fall due in large lumps at the start of each term, usually when family budgets are at their tightest. The School Fees Loan helps parents and guardians pay tuition and school-related costs on time, so children are not sent home or missing exams, and then spread the repayment over a manageable period.',
            'The loan is aimed at families who have steady income from a business, farm or job but lack a lump sum at the start of term. Where possible, Spider Microfinance pays the school directly, which ensures that the money is used for its intended purpose and gives the school the confidence that fees will be received.',
        ],
        'who_for' => [
            'Parents and guardians of children in nursery, primary, secondary, vocational or tertiary institutions.',
            'Self-employed parents whose income is irregular but dependable over the year.',
            'Salaried workers needing to pay fees before payday.',
            'Students in vocational or tertiary institutions with a guarantor [confirm].',
        ],
        'glance' => [
            [
                'feature' => 'Loan size',
                'details' => 'UGX [200,000 – 5,000,000]',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[3 – 9] months, or the length of the school term or year',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Monthly or as per the borrower\'s cash flow',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month on a [reducing] balance',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Application fee [x]%; no charge for direct payment to school',
            ],
            [
                'feature' => 'Security',
                'details' => 'Guarantor, school fees invoice, and where needed other movable assets',
            ],
            [
                'feature' => 'Grace period',
                'details' => 'Up to [1] month before the first instalment [confirm]',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'Directly to the school\'s bank account, or to the parent with proof of payment',
            ],
        ],
        'can_use_for' => [
            'Tuition and examination fees.',
            'Boarding, meals and uniforms.',
            'Textbooks, stationery and learning materials.',
            'Admission, registration and development fees.',
            'Transport and other costs required by the school.',
        ],
        'not_permitted' => 'Not permitted: Non-education expenses. Fees for institutions that are not licensed or recognised.',
        'eligibility' => [
            'Aged 18 or above, with a child or dependent enrolled or about to enrol in a recognised institution.',
            'Regular income from a job, business or farm.',
            'Ability to repay from household income without compromising basic needs.',
            'Clean credit record, or a guarantor with a sound record.',
            'Valid fee structure or admission letter from the school.',
        ],
        'documents' => [
            'National ID of the borrower and guarantor.',
            'Official fee structure or invoice from the school.',
            'Admission letter or report card for the learner.',
            'Proof of income: payslip, business records, mobile money statements or farm sales.',
            'Guarantor\'s details and consent.',
            'Passport photographs and completed application form.',
        ],
        'security' => [
            'Personal guarantor for the loan.',
            'Salary assignment for salaried borrowers.',
            'Pledge of movable assets such as electronics or equipment, where required for larger loans.',
            'Group guarantee for parents in the same school or community who borrow together [confirm].',
        ],
        'process' => [
            'Apply early, ideally at least [2–3] weeks before school opens.',
            'Provide the fee structure and income documents.',
            'The loan officer verifies income and the school invoice.',
            'Approval and an offer letter explaining the amount, rate and repayment.',
            'Signing the agreement.',
            'Disbursement directly to the school, with a copy of the receipt to the parent.',
            'Repayment starts as agreed, normally from the month after the loan is taken.',
        ],
        'repayment_terms' => [
            'Monthly instalments or as agreed with the loan officer.',
            'Repayment by mobile money, bank deposit or salary deduction.',
            'Early repayment is allowed, with interest charged only for the days the loan was outstanding [confirm].',
            'Late payments attract a penalty of [x]%.',
        ],
        'benefits' => [
            'Children stay in school and sit exams on time.',
            'Payment direct to the school protects the purpose of the loan.',
            'Spreading the cost gives families time to organise their income.',
            'Quick processing around school-opening dates.',
            'Repeat loans each term for borrowers with good records.',
        ],
        'responsibilities' => [
            'Apply early to avoid last-minute pressure.',
            'Borrow only what the school requires and what the household can repay.',
            'Keep the receipts and report cards, as the loan officer may ask for proof.',
            'Plan repayments around when your income is expected.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Namukasa\'s secondary-school term',
            'story' => 'Namukasa sells second-hand clothes at a market. She borrows UGX 1,200,000 for her daughter\'s tuition and boarding fees, paid straight to the school, and repays over four months.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 1,200,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '4 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '2% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 96,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 1,296,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '4',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 324,000',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'Will the school receive the money directly?',
                'a' => 'Yes, in most cases. We pay the school\'s official account against the fee invoice and give you the receipt.',
            ],
            [
                'q' => 'Can I borrow for several children?',
                'a' => 'Yes, provided the total loan is within your repayment capacity.',
            ],
            [
                'q' => 'Can I apply after school has already opened?',
                'a' => 'Yes, but early application is recommended so your child does not miss lessons.',
            ],
            [
                'q' => 'Do you fund university fees?',
                'a' => 'Yes, for recognised institutions, with a guarantor or other suitable security [confirm].',
            ],
        ],
        'page_title' => 'School Fees Loans – Spider Microfinance Uganda',
        'page_description' => 'Because no child\'s education should wait for the harvest or the paycheque. School fees fall due in large lumps at the start of each term, usually when family budgets are at their tightest. The School Fees Loan helps parents and guardians pay tuition and school-related costs on time, so children are not sent home or missing exams, and then spread the repayment over a manageable period.',
        'page_keywords' => 'school fees loans, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
    [
        'id' => 6,
        'slug' => 'emergency-loans',
        'title' => 'Emergency / Quick Loans',
        'full_title' => '6.6 Emergency / Quick Loans',
        'tagline' => 'Help when you need it most: small, fast, and fair.',
        'best_for' => 'Existing clients with good records',
        'icon' => 'fa-bolt',
        'badge' => 'Fast Emergency Help',
        'category' => 'personal',
        'image' => 'assets/images/emergency-loans.jpg',
        'url' => 'services/emergency-loans.php',
        'loan_size' => 'UGX [50,000 – 1,000,000]',
        'term' => '[1 – 3] months',
        'overview' => [
            'Emergencies do not wait for payday. A sudden medical bill, a funeral, a broken-down motorcycle or an unexpected shortage of stock can derail a household or small business. The Emergency Loan provides a small, short-term amount within hours, so that clients do not have to resort to selling assets cheaply or using high-cost informal lenders.',
            'To keep the product fast, it is reserved for existing clients with a good repayment history. Because Spider Microfinance already knows their payment behaviour, documentation is minimal and decisions can be made quickly, sometimes the same day.',
        ],
        'who_for' => [
            'Existing Spider Microfinance clients with a clean record on at least [one] completed loan cycle.',
            'Active borrowers who are up to date on their current loan.',
            'Members of groups who need a small extra amount in an urgent situation.',
            'Salary and business clients facing short-term cash shortages.',
        ],
        'glance' => [
            [
                'feature' => 'Loan size',
                'details' => 'UGX [50,000 – 1,000,000]',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[1 – 3] months',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Weekly or monthly, or a single payment at the end of the term',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month; flat fee [x]% for terms under one month [confirm]',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Processing fee [x]%; no other charges',
            ],
            [
                'feature' => 'Security',
                'details' => 'Based on past repayment record, with guarantor or savings as backup',
            ],
            [
                'feature' => 'Decision time',
                'details' => 'Within [2–24] hours',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'Mobile money, usually within minutes of approval',
            ],
        ],
        'can_use_for' => [
            'Medical bills, medicine and hospital admission.',
            'Funeral costs and urgent family obligations.',
            'Urgent repair of business equipment, a vehicle or a shop.',
            'Emergency stock replenishment.',
            'Urgent rent or utility payments to avoid disconnection or eviction.',
            'Temporary help with a delayed salary or payment.',
        ],
        'not_permitted' => 'Not permitted: Gambling, alcohol or luxury spending. Repaying other lenders, unless approved. Long-term investments, for which other products are more suitable.',
        'eligibility' => [
            'Existing client with at least [3–6] months\' history with Spider Microfinance.',
            'No arrears in the last [6] months.',
            'Active loan, if any, must be up to date.',
            'Verifiable income, with the instalment affordable alongside other obligations.',
            'Registered mobile money number in the client\'s own name.',
        ],
        'documents' => [
            'National ID, already on file for existing clients.',
            'Brief application form or request via the branch, call or USSD/app [confirm].',
            'Evidence of the emergency where possible, such as a hospital bill or repair quotation (not required for very small amounts).',
        ],
        'security' => [
            'Past repayment record and savings balance with Spider Microfinance.',
            'Guarantor or group member\'s confirmation for amounts above [UGX x].',
            'Salary assignment for salaried clients [confirm].',
        ],
        'process' => [
            'Contact your loan officer or visit the branch, or use the agreed digital channel.',
            'Confirm your identity and describe the need and amount.',
            'Quick review of your repayment history, savings and capacity to repay.',
            'Approval, normally within hours.',
            'Accept the terms, including fees and the repayment date, by signing or confirming digitally.',
            'Funds sent to your mobile money account.',
        ],
        'repayment_terms' => [
            'Single payment at the end of the term, or equal weekly or monthly instalments.',
            'Pay by mobile money, at the branch or by deduction from savings if you consent.',
            'Early repayment is allowed, and any unused interest is not charged for loans with reducing-balance pricing [confirm].',
            'Late payment penalties apply and may affect your eligibility for future emergency loans.',
        ],
        'benefits' => [
            'Speed: money within hours.',
            'Minimal paperwork.',
            'Fair, transparent pricing, with all costs disclosed upfront.',
            'Protects your assets and your main business or household plans.',
            'Reinforces a good repayment history, so you can access larger loans.',
        ],
        'responsibilities' => [
            'Borrow only what is urgent and necessary.',
            'Repay on time to keep your access to fast loans.',
            'Do not use the emergency loan to repay other loans repeatedly.',
            'Contact us early if you expect to be late.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Kato\'s motorcycle repair',
            'story' => 'Kato, a boda-boda rider, has repaid a previous Spider Microfinance loan in full. When his motorcycle\'s engine fails, he borrows UGX 300,000 for repairs so that he can get back to work within a day.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 300,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '2 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '3% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 18,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 318,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '2',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 159,000',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'Can new clients get an Emergency Loan?',
                'a' => 'No. This product is for existing clients with a good repayment record. New clients can start with a group or individual loan.',
            ],
            [
                'q' => 'How many emergency loans can I take a year?',
                'a' => 'Up to [x] a year, provided the previous one is fully repaid [confirm].',
            ],
            [
                'q' => 'Is the interest higher than other loans?',
                'a' => 'Short-term loans may carry a higher monthly rate or flat fee because of the speed and small size. All charges are disclosed before you accept.',
            ],
            [
                'q' => 'How quickly will I receive the money?',
                'a' => 'Typically within [2–24] hours of approval, and often within minutes by mobile money.',
            ],
        ],
        'page_title' => 'Emergency / Quick Loans – Spider Microfinance Uganda',
        'page_description' => 'Help when you need it most: small, fast, and fair. Emergencies do not wait for payday. A sudden medical bill, a funeral, a broken-down motorcycle or an unexpected shortage of stock can derail a household or small business. The Emergency Loan provides a small, short-term amount within hours, so that clients do not have to resort to selling assets cheaply or using high-cost informal lenders.',
        'page_keywords' => 'emergency / quick loans, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
    [
        'id' => 7,
        'slug' => 'asset-equipment-financing',
        'title' => 'Asset / Equipment Financing',
        'full_title' => '6.7 Asset / Equipment Financing',
        'tagline' => 'Own the tools that earn: finance the equipment, let it pay for itself.',
        'best_for' => 'Buyers of income-generating assets',
        'icon' => 'fa-motorcycle',
        'badge' => 'Tools & Machinery',
        'category' => 'business',
        'image' => 'assets/images/asset-financing.jpg',
        'url' => 'services/asset-equipment-financing.php',
        'loan_size' => 'Up to UGX [x]',
        'term' => '[6 – 36] months, depending on asset life',
        'overview' => [
            'Many small businesses are held back not by lack of customers but by lack of equipment. A boda-boda rider who rents a motorcycle, a tailor without a machine, or a family without solar power for their shop all pay more over time than they would by owning the asset. Asset Financing lets entrepreneurs acquire income-generating assets with a deposit and spread the balance over the loan period, with the asset itself serving as part of the security.',
            'Spider Microfinance can pay the supplier directly, which ensures the asset is purchased as agreed and reduces the risk of misuse of funds. Ownership transfers fully to the client once the loan has been repaid.',
        ],
        'who_for' => [
            'Boda-boda and delivery riders buying a motorcycle.',
            'Tailors, hairdressers and barbers acquiring sewing machines, dryers, clippers and furniture.',
            'Small millers, welders, carpenters and mechanics purchasing machinery and tools.',
            'Shops and households buying solar kits, refrigerators or generators for business use.',
            'Farmers purchasing water pumps, small tractors, ox-ploughs or processing machines.',
            'Small restaurants buying cookers, freezers and utensils.',
        ],
        'glance' => [
            [
                'feature' => 'Asset price covered',
                'details' => 'Up to [70–90]% of the asset\'s cost; the borrower pays the remaining deposit',
            ],
            [
                'feature' => 'Loan size',
                'details' => 'Up to UGX [x]',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[6 – 36] months, depending on asset life',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Weekly, fortnightly or monthly',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month on a [reducing] balance',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Application fee [x]%; insurance [x]%; registration fees where required',
            ],
            [
                'feature' => 'Security',
                'details' => 'The asset itself, plus guarantor or additional security as needed',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'Paid to the supplier on delivery of the asset',
            ],
        ],
        'can_use_for' => [
            'Motorcycles, tricycles and small vehicles used for business.',
            'Sewing machines, salon equipment, welding machines and carpentry tools.',
            'Maize mills, hullers, grinders and other small processing machinery.',
            'Solar systems, inverters and batteries for businesses.',
            'Refrigeration, catering and restaurant equipment.',
            'Farm tools, water pumps and irrigation kits.',
        ],
        'not_permitted' => 'Not permitted: Assets for personal use only. Second-hand assets of unknown origin or without documentation. Assets that cannot be insured or identified.',
        'eligibility' => [
            'Aged 18 or above with a business or income that can service the loan.',
            'Ability to pay the required deposit of [10–30]% of the asset cost.',
            'Business experience in the relevant activity, or proven ability to use the asset.',
            'Clean credit record, or a satisfactory guarantor.',
            'The asset must be new or in good second-hand condition and suitable for the business.',
        ],
        'documents' => [
            'National ID and passport photographs.',
            'Pro-forma invoice or quotation from a reputable supplier.',
            'Proof of deposit paid.',
            'Business or income records, and an LC1 letter confirming residence.',
            'For vehicles: purchase agreement, registration documents and insurance, with a logbook lodged with Spider Microfinance.',
            'Guarantor\'s details and documents.',
        ],
        'security' => [
            'The financed asset, on which Spider Microfinance holds an interest until the loan is repaid, such as a logbook held for motorcycles.',
            'Comprehensive or third-party insurance on the asset where applicable.',
            'Guarantor, plus additional collateral for higher-value assets.',
            'Compulsory savings.',
        ],
        'process' => [
            'Choose the asset and get a quotation from a reliable supplier.',
            'Submit the application with the quotation and documents.',
            'The loan officer assesses the asset\'s income potential and the borrower\'s ability to repay.',
            'The credit committee approves the loan, usually within [3–7] working days.',
            'The borrower pays the deposit, and Spider Microfinance pays the balance to the supplier.',
            'The asset is delivered and inspected, and the agreement and security documents are signed.',
            'Repayments start as scheduled.',
        ],
        'repayment_terms' => [
            'Fixed instalments weekly, fortnightly or monthly, matched to the earnings the asset generates.',
            'Early repayment is allowed and ownership documents are released on full repayment.',
            'Late payment may attract penalties; prolonged default may lead to repossession of the asset after due notice and in line with the law.',
        ],
        'benefits' => [
            'Ownership of a productive asset without needing the full price upfront.',
            'The asset earns income that helps repay itself.',
            'Direct supplier payment reduces fraud and misuse.',
            'Longer terms than working-capital loans.',
            'Insurance protects both borrower and lender against loss.',
        ],
        'responsibilities' => [
            'Keep the asset in good working order and insured.',
            'Do not sell, lease or pledge the asset to anyone else before the loan is repaid.',
            'Use the asset for business as agreed.',
            'Report theft, damage or loss immediately.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Ssemakula\'s motorcycle',
            'story' => 'Ssemakula wants to buy a motorcycle for UGX 7,500,000. He pays a 20% deposit of UGX 1,500,000 and finances the remaining UGX 6,000,000 over 18 months, with the motorcycle logbook held as security.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 6,000,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '18 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '2% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 2,160,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 8,160,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '18',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 453,333',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'Who owns the asset during the loan?',
                'a' => 'The borrower uses the asset, but Spider Microfinance holds the ownership documents or a security interest until the final payment is made.',
            ],
            [
                'q' => 'Can I buy a second-hand asset?',
                'a' => 'Yes, if it is inspected, has valid documents and is valued as fit for the business.',
            ],
            [
                'q' => 'What if the asset breaks down or is stolen?',
                'a' => 'Report it immediately. Insurance may cover loss or damage, and the loan officer will advise on the next steps.',
            ],
            [
                'q' => 'Can I choose my own supplier?',
                'a' => 'Yes, from reputable suppliers that Spider Microfinance can verify.',
            ],
        ],
        'page_title' => 'Asset / Equipment Financing – Spider Microfinance Uganda',
        'page_description' => 'Own the tools that earn: finance the equipment, let it pay for itself. Many small businesses are held back not by lack of customers but by lack of equipment. A boda-boda rider who rents a motorcycle, a tailor without a machine, or a family without solar power for their shop all pay more over time than they would by owning the asset. Asset Financing lets entrepreneurs acquire income-generating assets with a deposit and spread the balance over the loan period, with the asset itself serving as part of the security.',
        'page_keywords' => 'asset / equipment financing, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
    [
        'id' => 8,
        'slug' => 'youth-women-enterprise-loans',
        'title' => 'Youth & Women Enterprise Loans',
        'full_title' => '6.8 Youth and Women Enterprise Loans',
        'tagline' => 'Opening doors for the energy and enterprise that Uganda\'s economy runs on.',
        'best_for' => 'Young and women entrepreneurs',
        'icon' => 'fa-hand-holding-heart',
        'badge' => 'Youth & Women Empowerment',
        'category' => 'community',
        'image' => 'assets/images/youth-women.jpg',
        'url' => 'services/youth-women-enterprise-loans.php',
        'loan_size' => 'UGX [100,000 – 5,000,000], with graduation to higher amounts',
        'term' => '[4 – 18] months',
        'overview' => [
            'Young people and women are the backbone of Uganda\'s small-business sector, yet they often face the greatest barriers to finance: no land title, no collateral, limited business experience, or family and social constraints. This product removes many of those barriers with lower entry requirements, tailored support and a strong focus on skills.',
            'Beyond credit, clients receive mentoring, business-skills training and networking opportunities that increase the chances of success. Where appropriate, the product may be offered together with government or development-partner programmes that support youth and women\'s enterprise [confirm any partnership].',
        ],
        'who_for' => [
            'Young entrepreneurs aged [18–35] starting or growing a business.',
            'Women-owned or women-led businesses of all sizes, including home-based and informal enterprises.',
            'Recent graduates and vocational-school leavers starting enterprises.',
            'Women\'s and youth groups or cooperatives that qualify for group lending.',
            'Persons living with disabilities who are youth or women entrepreneurs [confirm].',
        ],
        'glance' => [
            [
                'feature' => 'Loan size',
                'details' => 'UGX [100,000 – 5,000,000], with graduation to higher amounts',
            ],
            [
                'feature' => 'Loan term',
                'details' => '[4 – 18] months',
            ],
            [
                'feature' => 'Repayment frequency',
                'details' => 'Weekly, fortnightly or monthly',
            ],
            [
                'feature' => 'Interest rate',
                'details' => '[x]% per month on a [reducing] balance, with a preferential rate for eligible clients [confirm]',
            ],
            [
                'feature' => 'Fees',
                'details' => 'Reduced application fee; training is free or subsidised [confirm]',
            ],
            [
                'feature' => 'Security',
                'details' => 'Group guarantee, guarantor, savings or small movable assets, with relaxed requirements',
            ],
            [
                'feature' => 'Business track record',
                'details' => 'Start-ups considered after training and a business-plan review',
            ],
            [
                'feature' => 'Disbursement',
                'details' => 'Mobile money, bank transfer or cash',
            ],
        ],
        'can_use_for' => [
            'Starting a small business with initial stock and equipment.',
            'Expanding an existing home-based or market business.',
            'Buying tools and equipment for trades, such as tailoring, carpentry, catering or hairdressing.',
            'Digital and online businesses: phones, internet, photography, printing and design.',
            'Agribusiness and value addition, such as processing, packaging and branding.',
            'Paying for licences, registration and business-development services.',
        ],
        'not_permitted' => 'Not permitted: Non-business spending. Activities that are illegal or harmful. Lending on to third parties.',
        'eligibility' => [
            'Youth aged [18–35], or women aged 18 or above.',
            'Resident in the service area for at least [6] months.',
            'A viable business idea, or a business already running, supported by a simple plan.',
            'Willingness to complete the entrepreneurship training before the loan is disbursed.',
            'Group membership or a guarantor, depending on loan size.',
            'No outstanding default with another lender.',
        ],
        'documents' => [
            'National ID or LC1 letter for those awaiting ID.',
            'Simple business plan, which a loan officer or trainer will help to prepare.',
            'Proof of residence, such as an LC1 letter.',
            'Group registration or recommendation letter, where applicable.',
            'Training certificate or attendance record.',
            'Passport photographs and application form.',
        ],
        'security' => [
            'Group guarantee with compulsory savings.',
            'A guarantor, such as a parent, spouse or respected community member.',
            'Small movable assets, with an acknowledgment from the borrower.',
            'Flexible security is considered for first-time borrowers, supported by training and mentoring.',
        ],
        'process' => [
            'Attend an information session explaining the product and its requirements.',
            'Complete the entrepreneurship and financial-literacy training.',
            'Prepare a simple business plan with help from staff or a mentor.',
            'Submit the application and documents.',
            'Business visit and appraisal.',
            'Approval and signing of the loan agreement.',
            'Disbursement, followed by regular mentoring visits and peer-network meetings.',
        ],
        'repayment_terms' => [
            'Instalments are set according to the business\'s expected cash flow, with a grace period of [up to 1 month] for start-ups [confirm].',
            'Small, frequent payments by mobile money make repayments manageable.',
            'Early repayment is encouraged and is rewarded with a larger repeat loan [confirm].',
            'Struggling clients are supported through coaching or rescheduling before penalties apply.',
        ],
        'benefits' => [
            'Lower entry barriers for first-time borrowers.',
            'Free or subsidised training and mentoring.',
            'Graduated loan amounts that grow with your business.',
            'Peer networks and market linkages.',
            'Women-friendly services, including flexible meeting times and respect for household duties.',
            'Builds a credit history from the start.',
        ],
        'responsibilities' => [
            'Attend all training sessions.',
            'Keep simple records and reinvest part of your profits.',
            'Maintain open communication with your loan officer and mentor.',
            'Do not borrow on behalf of other people or share your loan with those who have not been appraised.',
        ],
        'worked_example' => [
            'title' => 'Worked example (illustrative only): Achieng\'s tailoring start-up',
            'story' => 'Achieng, 24, has completed a tailoring course but has no machine. After the entrepreneurship training she borrows UGX 1,500,000 to buy two sewing machines and fabric, with her mother as guarantor.',
            'table' => [
                [
                    'item' => 'Loan principal',
                    'amount' => 'UGX 1,500,000',
                ],
                [
                    'item' => 'Term',
                    'amount' => '9 months',
                ],
                [
                    'item' => 'Assumed flat rate (illustration only)',
                    'amount' => '2% per month',
                ],
                [
                    'item' => 'Total interest over the term',
                    'amount' => 'UGX 270,000',
                ],
                [
                    'item' => 'Total to repay',
                    'amount' => 'UGX 1,770,000',
                ],
                [
                    'item' => 'Number of instalments',
                    'amount' => '9',
                ],
                [
                    'item' => 'Approximate instalment',
                    'amount' => 'UGX 196,667',
                ],
            ],
            'note' => 'Example excludes fees, insurance and compulsory savings, which would be shown in the loan offer letter.',
        ],
        'faqs' => [
            [
                'q' => 'Do I need a business already running?',
                'a' => 'Not necessarily. Start-ups can qualify after training and a satisfactory business plan, though loan amounts may be smaller.',
            ],
            [
                'q' => 'Is the training compulsory?',
                'a' => 'Yes. It improves your chances of success and is a condition for disbursement.',
            ],
            [
                'q' => 'Do I need my husband\'s or parents\' permission?',
                'a' => 'No. You are assessed on your own business and ability to repay. A guarantor is required, but this need not be a spouse.',
            ],
            [
                'q' => 'Is this linked to government programmes?',
                'a' => 'Where Spider Microfinance partners with such programmes, we will inform eligible clients [confirm].',
            ],
        ],
        'page_title' => 'Youth & Women Enterprise Loans – Spider Microfinance Uganda',
        'page_description' => 'Opening doors for the energy and enterprise that Uganda\'s economy runs on. Young people and women are the backbone of Uganda\'s small-business sector, yet they often face the greatest barriers to finance: no land title, no collateral, limited business experience, or family and social constraints. This product removes many of those barriers with lower entry requirements, tailored support and a strong focus on skills.',
        'page_keywords' => 'youth & women enterprise loans, microfinance Uganda, Spider Microfinance, affordable loans Uganda, Tier 4 UMRA',
    ],
];
