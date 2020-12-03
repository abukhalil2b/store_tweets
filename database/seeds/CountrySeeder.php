<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		$countries = [
			['code' => 'AX', 'en_name' => 'Åland Islands', 'ar_name' => 'جزر أولان ', 'calling_code' => '358'],
			['code' => 'AL', 'en_name' => 'Albania', 'ar_name' => 'ألبانيا ', 'calling_code' => '355'],
			['code' => 'DZ', 'en_name' => 'Algeria', 'ar_name' => 'الجزائر', 'calling_code' => '213'],
			['code' => 'AS', 'en_name' => 'American Samoa', 'ar_name' => 'ساموا الأمريكية ', 'calling_code' => '1 684'],
			['code' => 'AD', 'en_name' => 'Andorra', 'ar_name' => 'أندورا ', 'calling_code' => '376'],
			['code' => 'AO', 'en_name' => 'Angola', 'ar_name' => 'أنغولا ', 'calling_code' => '244'],
			['code' => 'AI', 'en_name' => 'Anguilla', 'ar_name' => 'أنغويلا ', 'calling_code' => '1 264'],
			['code' => 'AQ', 'en_name' => 'Antarctica', 'ar_name' => 'أنتاركتيكا ', 'calling_code' => '672'],
			['code' => 'AG', 'en_name' => 'Antigua and Barbuda', 'ar_name' => 'أنتيغوا وبربودا ', 'calling_code' => '1 268'],
			['code' => 'AR', 'en_name' => 'Argentina', 'ar_name' => 'الأرجنتين ', 'calling_code' => '54'],
			['code' => 'AM', 'en_name' => 'Armenia', 'ar_name' => 'أرمينيا ', 'calling_code' => '374'],
			['code' => 'AW', 'en_name' => 'Aruba', 'ar_name' => 'آروبا ', 'calling_code' => '297'],
			['code' => 'AU', 'en_name' => 'Australia', 'ar_name' => 'أستراليا ', 'calling_code' => '61'],
			['code' => 'AT', 'en_name' => 'Austria', 'ar_name' => 'النمسا ', 'calling_code' => '43'],
			['code' => 'AZ', 'en_name' => 'Azerbaijan', 'ar_name' => 'أذربيجان ', 'calling_code' => '994'],
			['code' => 'BS', 'en_name' => 'Bahamas', 'ar_name' => 'الباهاما ', 'calling_code' => '1 242'],
			['code' => 'BH', 'en_name' => 'Bahrain', 'ar_name' => 'البحرين', 'calling_code' => '973'],
			['code' => 'BD', 'en_name' => 'Bangladesh', 'ar_name' => 'بنجلاديش ', 'calling_code' => '880'],
			['code' => 'BB', 'en_name' => 'Barbados', 'ar_name' => 'بربادوس ', 'calling_code' => '1 246'],
			['code' => 'BY', 'en_name' => 'Belarus', 'ar_name' => 'روسيا البيضاء ', 'calling_code' => '375'],
			['code' => 'BE', 'en_name' => 'Belgium', 'ar_name' => 'بلجيكا ', 'calling_code' => '32'],
			['code' => 'BZ', 'en_name' => 'Belize', 'ar_name' => 'بليز ', 'calling_code' => '501'],
			['code' => 'BJ', 'en_name' => 'Benin', 'ar_name' => 'بنين ', 'calling_code' => '229'],
			['code' => 'BM', 'en_name' => 'Bermuda', 'ar_name' => 'برمودا ', 'calling_code' => '1 441'],
			['code' => 'BT', 'en_name' => 'Bhutan', 'ar_name' => 'بوتان ', 'calling_code' => '975'],
			['code' => 'BO', 'en_name' => 'Bolivia', 'ar_name' => 'بوليفيا ', 'calling_code' => '591'],
			['code' => 'BQ', 'en_name' => 'Caribbean Netherlands', 'ar_name' => 'هولندا الكاريبية ', 'calling_code' => '599'],
			['code' => 'BA', 'en_name' => 'Bosnia and Herzegovina', 'ar_name' => 'البوسنة والهرسك ', 'calling_code' => '387'],
			['code' => 'BW', 'en_name' => 'Botswana', 'ar_name' => 'بتسوانا ', 'calling_code' => '267'],
			['code' => 'BV', 'en_name' => 'Bouvet Island', 'ar_name' => 'جزيرة بوفيه ', 'calling_code' => 'Null'],
			['code' => 'BR', 'en_name' => 'Brazil', 'ar_name' => 'البرازيل ', 'calling_code' => '55'],
			['code' => 'IO', 'en_name' => 'British Indian Ocean Territory', 'ar_name' => 'الإقليم البريطاني في المحيط الهندي ', 'calling_code' => '246'],
			['code' => 'BN', 'en_name' => 'Brunei', 'ar_name' => 'بروناي ', 'calling_code' => '673'],
			['code' => 'BG', 'en_name' => 'Bulgaria', 'ar_name' => 'بلغاريا ', 'calling_code' => '359'],
			['code' => 'BF', 'en_name' => 'Burkina Faso', 'ar_name' => 'بوركينا فاسو ', 'calling_code' => '226'],
			['code' => 'BI', 'en_name' => 'Burundi', 'ar_name' => 'بوروندي ', 'calling_code' => '257'],
			['code' => 'KH', 'en_name' => 'Cambodia', 'ar_name' => 'كمبوديا ', 'calling_code' => '855'],
			['code' => 'CM', 'en_name' => 'Cameroon', 'ar_name' => 'الكاميرون ', 'calling_code' => '237'],
			['code' => 'CA', 'en_name' => 'Canada', 'ar_name' => 'كندا ', 'calling_code' => '1'],
			['code' => 'CV', 'en_name' => 'Cape Verde', 'ar_name' => 'الرأس الأخضر ', 'calling_code' => '238'],
			['code' => 'KY', 'en_name' => 'Cayman Islands', 'ar_name' => 'جزر الكايمن ', 'calling_code' => '1 345'],
			['code' => 'CF', 'en_name' => 'Central African Republic', 'ar_name' => 'جمهورية أفريقيا الوسطى ', 'calling_code' => '236'],
			['code' => 'TD', 'en_name' => 'Chad', 'ar_name' => 'تشاد ', 'calling_code' => '235'],
			['code' => 'CL', 'en_name' => 'Chile', 'ar_name' => 'شيلي ', 'calling_code' => '56'],
			['code' => 'CN', 'en_name' => 'China', 'ar_name' => 'الصين ', 'calling_code' => '86'],
			['code' => 'CX', 'en_name' => 'Christmas Island', 'ar_name' => 'جزيرة الكريسماس ', 'calling_code' => '61'],
			['code' => 'CC', 'en_name' => 'Cocos [Keeling] Islands', 'ar_name' => 'جزر كوكوس ', 'calling_code' => '61'],
			['code' => 'CO', 'en_name' => 'Colombia', 'ar_name' => 'كولومبيا ', 'calling_code' => '57'],
			['code' => 'KM', 'en_name' => 'Comoros', 'ar_name' => 'جزر القمر', 'calling_code' => '269'],
			['code' => 'CG', 'en_name' => 'Congo [Republic]', 'ar_name' => 'الكونغو - برازافيل ', 'calling_code' => '242'],
			['code' => 'CD', 'en_name' => 'Congo [DRC]', 'ar_name' => 'الكونغو - كينشاسا ', 'calling_code' => '243'],
			['code' => 'CK', 'en_name' => 'Cook Islands', 'ar_name' => 'جزر كوك ', 'calling_code' => '682'],
			['code' => 'CR', 'en_name' => 'Costa Rica', 'ar_name' => 'كوستاريكا ', 'calling_code' => '506'],
			['code' => 'CI', 'en_name' => 'Côte d’Ivoire', 'ar_name' => 'ساحل العاج ', 'calling_code' => '225'],
			['code' => 'HR', 'en_name' => 'Croatia', 'ar_name' => 'كرواتيا ', 'calling_code' => '385'],
			['code' => 'CU', 'en_name' => 'Cuba', 'ar_name' => 'كوبا ', 'calling_code' => '53'],
			['code' => 'CW', 'en_name' => 'Curaçao', 'ar_name' => 'كوراساو ', 'calling_code' => '599 9'],
			['code' => 'CY', 'en_name' => 'Cyprus', 'ar_name' => 'قبرص ', 'calling_code' => '357'],
			['code' => 'CZ', 'en_name' => 'Czech Republic', 'ar_name' => 'جمهورية التشيك ', 'calling_code' => '420'],
			['code' => 'DK', 'en_name' => 'Denmark', 'ar_name' => 'الدانمرك ', 'calling_code' => '45'],
			['code' => 'DJ', 'en_name' => 'Djibouti', 'ar_name' => 'جيبوتي ', 'calling_code' => '253'],
			['code' => 'DM', 'en_name' => 'Dominica', 'ar_name' => 'دومينيكا ', 'calling_code' => '1 767'],
			['code' => 'DO', 'en_name' => 'Dominican Republic', 'ar_name' => 'جمهورية الدومينيك ', 'calling_code' => '1 809'],
			['code' => 'EC', 'en_name' => 'Ecuador', 'ar_name' => 'الإكوادور ', 'calling_code' => '593'],
			['code' => 'EG', 'en_name' => 'Egypt', 'ar_name' => 'مصر', 'calling_code' => '20'],
			['code' => 'SV', 'en_name' => 'El Salvador', 'ar_name' => 'السلفادور ', 'calling_code' => '503'],
			['code' => 'GQ', 'en_name' => 'Equatorial Guinea', 'ar_name' => 'غينيا الإستوائية ', 'calling_code' => '240'],
			['code' => 'ER', 'en_name' => 'Eritrea', 'ar_name' => 'أريتريا ', 'calling_code' => '291'],
			['code' => 'EE', 'en_name' => 'Estonia', 'ar_name' => 'أستونيا ', 'calling_code' => '372'],
			['code' => 'ET', 'en_name' => 'Ethiopia', 'ar_name' => 'إثيوبيا ', 'calling_code' => '251'],
			['code' => 'FK', 'en_name' => 'Falkland Islands [Islas Malvinas]', 'ar_name' => 'جزر فوكلاند ', 'calling_code' => '500'],
			['code' => 'FO', 'en_name' => 'Faroe Islands', 'ar_name' => 'جزر فارو ', 'calling_code' => '298'],
			['code' => 'FJ', 'en_name' => 'Fiji', 'ar_name' => 'فيجي ', 'calling_code' => '679'],
			['code' => 'FI', 'en_name' => 'Finland', 'ar_name' => 'فنلندا ', 'calling_code' => '358'],
			['code' => 'FR', 'en_name' => 'France', 'ar_name' => 'فرنسا ', 'calling_code' => '33'],
			['code' => 'GF', 'en_name' => 'French Guiana', 'ar_name' => 'غويانا الفرنسية ', 'calling_code' => NULL],
			['code' => 'PF', 'en_name' => 'French Polynesia', 'ar_name' => 'بولينيزيا الفرنسية ', 'calling_code' => '689'],
			['code' => 'TF', 'en_name' => 'French Southern Territories', 'ar_name' => 'المقاطعات الجنوبية الفرنسية ', 'calling_code' => NULL],
			['code' => 'GA', 'en_name' => 'Gabon', 'ar_name' => 'الجابون ', 'calling_code' => '241'],
			['code' => 'GM', 'en_name' => 'Gambia', 'ar_name' => 'غامبيا ', 'calling_code' => '220'],
			['code' => 'GE', 'en_name' => 'Georgia', 'ar_name' => 'جورجيا ', 'calling_code' => '995'],
			['code' => 'DE', 'en_name' => 'Germany', 'ar_name' => 'ألمانيا ', 'calling_code' => '49'],
			['code' => 'GH', 'en_name' => 'Ghana', 'ar_name' => 'غانا ', 'calling_code' => '233'],
			['code' => 'GI', 'en_name' => 'Gibraltar', 'ar_name' => 'جبل طارق ', 'calling_code' => '350'],
			['code' => 'GR', 'en_name' => 'Greece', 'ar_name' => 'اليونان ', 'calling_code' => '30'],
			['code' => 'GL', 'en_name' => 'Greenland', 'ar_name' => 'غرينلاند ', 'calling_code' => '299'],
			['code' => 'GD', 'en_name' => 'Grenada', 'ar_name' => 'غرينادا ', 'calling_code' => '1 473'],
			['code' => 'GP', 'en_name' => 'Guadeloupe', 'ar_name' => 'جوادلوب ', 'calling_code' => NULL],
			['code' => 'GU', 'en_name' => 'Guam', 'ar_name' => 'غوام ', 'calling_code' => '1 671'],
			['code' => 'GT', 'en_name' => 'Guatemala', 'ar_name' => 'غواتيمالا ', 'calling_code' => '502'],
			['code' => 'GG', 'en_name' => 'Guernsey', 'ar_name' => 'غيرنزي ', 'calling_code' => '44'],
			['code' => 'GN', 'en_name' => 'Guinea', 'ar_name' => 'غينيا ', 'calling_code' => '224'],
			['code' => 'GW', 'en_name' => 'Guinea-Bissau', 'ar_name' => 'غينيا بيساو ', 'calling_code' => '245'],
			['code' => 'GY', 'en_name' => 'Guyana', 'ar_name' => 'غيانا ', 'calling_code' => '592'],
			['code' => 'HT', 'en_name' => 'Haiti', 'ar_name' => 'هايتي ', 'calling_code' => '509'],
			['code' => 'HM', 'en_name' => 'Heard Island and McDonald Islands', 'ar_name' => 'جزيرة هيرد وجزر ماكدونالد ', 'calling_code' => NULL],
			['code' => 'VA', 'en_name' => 'Vatican City', 'ar_name' => 'الفاتيكان ', 'calling_code' => '39'],
			['code' => 'HN', 'en_name' => 'Honduras', 'ar_name' => 'هندوراس ', 'calling_code' => '504'],
			['code' => 'HK', 'en_name' => 'Hong Kong', 'ar_name' => 'هونغ كونغ ', 'calling_code' => '852'],
			['code' => 'HU', 'en_name' => 'Hungary', 'ar_name' => 'هنغاريا ', 'calling_code' => '36'],
			['code' => 'IS', 'en_name' => 'Iceland', 'ar_name' => 'أيسلندا ', 'calling_code' => '354'],
			['code' => 'IN', 'en_name' => 'India', 'ar_name' => 'الهند ', 'calling_code' => '91'],
			['code' => 'ID', 'en_name' => 'Indonesia', 'ar_name' => 'أندونيسيا ', 'calling_code' => '62'],
			['code' => 'IR', 'en_name' => 'Iran', 'ar_name' => 'ایران', 'calling_code' => '98'],
			['code' => 'IQ', 'en_name' => 'Iraq', 'ar_name' => 'العراق', 'calling_code' => '964'],
			['code' => 'IE', 'en_name' => 'Ireland', 'ar_name' => 'أيرلندا ', 'calling_code' => '353'],
			['code' => 'IM', 'en_name' => 'Isle of Man', 'ar_name' => 'جزيرة مان ', 'calling_code' => '44'],
			['code' => 'IL', 'en_name' => 'Israel', 'ar_name' => 'إسرائيل', 'calling_code' => '972'],
			['code' => 'IT', 'en_name' => 'Italy', 'ar_name' => 'إيطاليا ', 'calling_code' => '39'],
			['code' => 'JM', 'en_name' => 'Jamaica', 'ar_name' => 'جامايكا ', 'calling_code' => '1 876'],
			['code' => 'JP', 'en_name' => 'Japan', 'ar_name' => 'اليابان ', 'calling_code' => '81'],
			['code' => 'JE', 'en_name' => 'Jersey', 'ar_name' => 'جيرسي ', 'calling_code' => '44'],
			['code' => 'JO', 'en_name' => 'Jordan', 'ar_name' => 'الأردن', 'calling_code' => '962'],
			['code' => 'KZ', 'en_name' => 'Kazakhstan', 'ar_name' => 'كازاخستان ', 'calling_code' => '7'],
			['code' => 'KE', 'en_name' => 'Kenya', 'ar_name' => 'كينيا ', 'calling_code' => '254'],
			['code' => 'KI', 'en_name' => 'Kiribati', 'ar_name' => 'كيريباتي ', 'calling_code' => '686'],
			['code' => 'KP', 'en_name' => 'North Korea', 'ar_name' => 'كوريا الشمالية ', 'calling_code' => '850'],
			['code' => 'KR', 'en_name' => 'South Korea', 'ar_name' => 'كوريا الجنوبية ', 'calling_code' => '82'],
			['code' => 'KW', 'en_name' => 'Kuwait', 'ar_name' => 'الكويت', 'calling_code' => '965'],
			['code' => 'KG', 'en_name' => 'Kyrgyzstan', 'ar_name' => 'قرغيزستان ', 'calling_code' => '996'],
			['code' => 'LA', 'en_name' => 'Laos', 'ar_name' => 'لاوس ', 'calling_code' => '856'],
			['code' => 'LV', 'en_name' => 'Latvia', 'ar_name' => 'لاتفيا ', 'calling_code' => '371'],
			['code' => 'LB', 'en_name' => 'Lebanon', 'ar_name' => 'لبنان', 'calling_code' => '961'],
			['code' => 'LS', 'en_name' => 'Lesotho', 'ar_name' => 'ليسوتو ', 'calling_code' => '266'],
			['code' => 'LR', 'en_name' => 'Liberia', 'ar_name' => 'ليبيريا ', 'calling_code' => '231'],
			['code' => 'LY', 'en_name' => 'Libya', 'ar_name' => 'ليبيا', 'calling_code' => '218'],
			['code' => 'LI', 'en_name' => 'Liechtenstein', 'ar_name' => 'ليختنشتاين ', 'calling_code' => '423'],
			['code' => 'LT', 'en_name' => 'Lithuania', 'ar_name' => 'ليتوانيا ', 'calling_code' => '370'],
			['code' => 'LU', 'en_name' => 'Luxembourg', 'ar_name' => 'لوكسمبورغ ', 'calling_code' => '352'],
			['code' => 'MO', 'en_name' => 'Macau', 'ar_name' => 'مكاو ', 'calling_code' => '853'],
			['code' => 'MK', 'en_name' => 'Macedonia [FYROM]', 'ar_name' => 'مقدونيا ', 'calling_code' => '389'],
			['code' => 'MG', 'en_name' => 'Madagascar', 'ar_name' => 'مدغشقر ', 'calling_code' => '261'],
			['code' => 'MW', 'en_name' => 'Malawi', 'ar_name' => 'ملاوي ', 'calling_code' => '265'],
			['code' => 'MY', 'en_name' => 'Malaysia', 'ar_name' => 'ماليزيا ', 'calling_code' => '60'],
			['code' => 'MV', 'en_name' => 'Maldives', 'ar_name' => 'جزر المالديف ', 'calling_code' => '960'],
			['code' => 'ML', 'en_name' => 'Mali', 'ar_name' => 'مالي ', 'calling_code' => '223'],
			['code' => 'MT', 'en_name' => 'Malta', 'ar_name' => 'مالطا ', 'calling_code' => '356'],
			['code' => 'MH', 'en_name' => 'Marshall Islands', 'ar_name' => 'جزر المارشال ', 'calling_code' => '692'],
			['code' => 'MQ', 'en_name' => 'Martinique', 'ar_name' => 'مارتينيك ', 'calling_code' => '596'],
			['code' => 'MR', 'en_name' => 'Mauritania', 'ar_name' => 'موريتانيا', 'calling_code' => '222'],
			['code' => 'MU', 'en_name' => 'Mauritius', 'ar_name' => 'موريشيوس ', 'calling_code' => '230'],
			['code' => 'YT', 'en_name' => 'Mayotte', 'ar_name' => 'مايوت ', 'calling_code' => '262'],
			['code' => 'MX', 'en_name' => 'Mexico', 'ar_name' => 'المكسيك ', 'calling_code' => '52'],
			['code' => 'FM', 'en_name' => 'Micronesia', 'ar_name' => 'ميكرونيزيا ', 'calling_code' => '691'],
			['code' => 'MD', 'en_name' => 'Moldova', 'ar_name' => 'مولدافيا ', 'calling_code' => '373'],
			['code' => 'MC', 'en_name' => 'Monaco', 'ar_name' => 'موناكو ', 'calling_code' => '377'],
			['code' => 'MN', 'en_name' => 'Mongolia', 'ar_name' => 'منغوليا ', 'calling_code' => '976'],
			['code' => 'ME', 'en_name' => 'Montenegro', 'ar_name' => 'الجبل الأسود ', 'calling_code' => '382'],
			['code' => 'MS', 'en_name' => 'Montserrat', 'ar_name' => 'مونتسرات ', 'calling_code' => '1 664'],
			['code' => 'MA', 'en_name' => 'Morocco', 'ar_name' => 'المغرب', 'calling_code' => '212'],
			['code' => 'MZ', 'en_name' => 'Mozambique', 'ar_name' => 'موزمبيق ', 'calling_code' => '258'],
			['code' => 'MM', 'en_name' => 'Myanmar [Burma]', 'ar_name' => 'ميانمار -بورما ', 'calling_code' => '95'],
			['code' => 'NA', 'en_name' => 'Namibia', 'ar_name' => 'ناميبيا ', 'calling_code' => '264'],
			['code' => 'NR', 'en_name' => 'Nauru', 'ar_name' => 'ناورو ', 'calling_code' => '674'],
			['code' => 'NP', 'en_name' => 'Nepal', 'ar_name' => 'نيبال ', 'calling_code' => '977'],
			['code' => 'NL', 'en_name' => 'Netherlands', 'ar_name' => 'هولندا ', 'calling_code' => '31'],
			['code' => 'NC', 'en_name' => 'New Caledonia', 'ar_name' => 'كاليدونيا الجديدة ', 'calling_code' => '687'],
			['code' => 'NZ', 'en_name' => 'New Zealand', 'ar_name' => 'نيوزيلاندا ', 'calling_code' => '64'],
			['code' => 'NI', 'en_name' => 'Nicaragua', 'ar_name' => 'نيكاراغوا ', 'calling_code' => '505'],
			['code' => 'NE', 'en_name' => 'Niger', 'ar_name' => 'النيجر ', 'calling_code' => '227'],
			['code' => 'NG', 'en_name' => 'Nigeria', 'ar_name' => 'نيجيريا ', 'calling_code' => '234'],
			['code' => 'NU', 'en_name' => 'Niue', 'ar_name' => 'نيوي ', 'calling_code' => '683'],
			['code' => 'NF', 'en_name' => 'Norfolk Island', 'ar_name' => 'جزيرة نورفوك ', 'calling_code' => '672'],
			['code' => 'MP', 'en_name' => 'Northern Mariana Islands', 'ar_name' => 'جزر ماريانا الشمالية ', 'calling_code' => '1 670'],
			['code' => 'NO', 'en_name' => 'Norway', 'ar_name' => 'النرويج ', 'calling_code' => '47'],
			['code' => 'OM', 'en_name' => 'Oman', 'ar_name' => 'عُمان', 'calling_code' => '968'],
			['code' => 'PK', 'en_name' => 'Pakistan', 'ar_name' => 'باكستان', 'calling_code' => '92'],
			['code' => 'PW', 'en_name' => 'Palau', 'ar_name' => 'بالاو ', 'calling_code' => '680'],
			['code' => 'PS', 'en_name' => 'Palestine', 'ar_name' => 'فلسطين', 'calling_code' => '970'],
			['code' => 'PA', 'en_name' => 'Panama', 'ar_name' => 'بنما ', 'calling_code' => '507'],
			['code' => 'PG', 'en_name' => 'Papua New Guinea', 'ar_name' => 'بابوا غينيا الجديدة ', 'calling_code' => '675'],
			['code' => 'PY', 'en_name' => 'Paraguay', 'ar_name' => 'باراغواي ', 'calling_code' => '595'],
			['code' => 'PE', 'en_name' => 'Peru', 'ar_name' => 'بيرو ', 'calling_code' => '51'],
			['code' => 'PH', 'en_name' => 'Philippines', 'ar_name' => 'الفيلبين ', 'calling_code' => '63'],
			['code' => 'PN', 'en_name' => 'Pitcairn Islands', 'ar_name' => 'جزر بيتكيرن ', 'calling_code' => '870'],
			['code' => 'PL', 'en_name' => 'Poland', 'ar_name' => 'بولندا ', 'calling_code' => '48'],
			['code' => 'PT', 'en_name' => 'Portugal', 'ar_name' => 'البرتغال ', 'calling_code' => '351'],
			['code' => 'PR', 'en_name' => 'Puerto Rico', 'ar_name' => 'بورتوريكو ', 'calling_code' => '1 787'],
			['code' => 'QA', 'en_name' => 'Qatar', 'ar_name' => 'قطر', 'calling_code' => '974'],
			['code' => 'RE', 'en_name' => 'Réunion', 'ar_name' => 'روينيون ', 'calling_code' => NULL],
			['code' => 'RO', 'en_name' => 'Romania', 'ar_name' => 'رومانيا ', 'calling_code' => '40'],
			['code' => 'RU', 'en_name' => 'Russia', 'ar_name' => 'روسيا ', 'calling_code' => '7'],
			['code' => 'RW', 'en_name' => 'Rwanda', 'ar_name' => 'رواندا ', 'calling_code' => '250'],
			['code' => 'BL', 'en_name' => 'Saint Barthélemy', 'ar_name' => 'سان بارتليمي ', 'calling_code' => '590'],
			['code' => 'SH', 'en_name' => 'Saint Helena', 'ar_name' => 'سانت هيلنا ', 'calling_code' => '290'],
			['code' => 'KN', 'en_name' => 'Saint Kitts and Nevis', 'ar_name' => 'سانت كيتس ونيفيس ', 'calling_code' => '1 869'],
			['code' => 'LC', 'en_name' => 'Saint Lucia', 'ar_name' => 'سانت لوسيا ', 'calling_code' => '1 758'],
			['code' => 'MF', 'en_name' => 'Saint Martin', 'ar_name' => 'سانت مارتن ', 'calling_code' => '1 599'],
			['code' => 'PM', 'en_name' => 'Saint Pierre and Miquelon', 'ar_name' => 'سانت بيير وميكولون ', 'calling_code' => '508'],
			['code' => 'VC', 'en_name' => 'Saint Vincent and the Grenadines', 'ar_name' => 'سانت فنسنت وغرنادين ', 'calling_code' => '1784'],
			['code' => 'WS', 'en_name' => 'Samoa', 'ar_name' => 'ساموا ', 'calling_code' => '685'],
			['code' => 'SM', 'en_name' => 'San Marino', 'ar_name' => 'سان مارينو ', 'calling_code' => '378'],
			['code' => 'ST', 'en_name' => 'São Tomé and Príncipe', 'ar_name' => 'ساو تومي وبرينسيبي ', 'calling_code' => '239'],
			['code' => 'SA', 'en_name' => 'Saudi Arabia', 'ar_name' => 'المملكة العربية السعودية', 'calling_code' => '966'],
			['code' => 'SN', 'en_name' => 'Senegal', 'ar_name' => 'السنغال ', 'calling_code' => '221'],
			['code' => 'RS', 'en_name' => 'Serbia', 'ar_name' => 'صربيا ', 'calling_code' => '381'],
			['code' => 'SC', 'en_name' => 'Seychelles', 'ar_name' => 'سيشل ', 'calling_code' => '248'],
			['code' => 'SL', 'en_name' => 'Sierra Leone', 'ar_name' => 'سيراليون ', 'calling_code' => '232'],
			['code' => 'SG', 'en_name' => 'Singapore', 'ar_name' => 'سنغافورة ', 'calling_code' => '65'],
			['code' => 'SX', 'en_name' => 'Sint Maarten', 'ar_name' => 'سينت مارتن ', 'calling_code' => '1 721'],
			['code' => 'SK', 'en_name' => 'Slovakia', 'ar_name' => 'سلوفاكيا ', 'calling_code' => '421'],
			['code' => 'SI', 'en_name' => 'Slovenia', 'ar_name' => 'سلوفينيا ', 'calling_code' => '386'],
			['code' => 'SB', 'en_name' => 'Solomon Islands', 'ar_name' => 'جزر سليمان ', 'calling_code' => '677'],
			['code' => 'SO', 'en_name' => 'Somalia', 'ar_name' => 'الصومال ', 'calling_code' => '252'],
			['code' => 'ZA', 'en_name' => 'South Africa', 'ar_name' => 'جنوب أفريقيا ', 'calling_code' => '27'],
			['code' => 'GS', 'en_name' => 'South Georgia and the South Sandwich Islands', 'ar_name' => 'جورجيا الجنوبية وجز] ساندويتش الجنوبية ', 'calling_code' => NULL],
			['code' => 'SS', 'en_name' => 'South Sudan', 'ar_name' => 'جنوب السودان', 'calling_code' => '211'],
			['code' => 'ES', 'en_name' => 'Spain', 'ar_name' => 'إسبانيا ', 'calling_code' => '34'],
			['code' => 'LK', 'en_name' => 'Sri Lanka', 'ar_name' => 'سريلانكا ', 'calling_code' => '94'],
			['code' => 'SD', 'en_name' => 'Sudan', 'ar_name' => 'السودان', 'calling_code' => '249'],
			['code' => 'SR', 'en_name' => 'Suriname', 'ar_name' => 'سورينام ', 'calling_code' => '597'],
			['code' => 'SJ', 'en_name' => 'Svalbard and Jan Mayen', 'ar_name' => 'سفالبارد وجان مايان ', 'calling_code' => NULL],
			['code' => 'SZ', 'en_name' => 'Swaziland', 'ar_name' => 'سوازيلاند ', 'calling_code' => '268'],
			['code' => 'SE', 'en_name' => 'Sweden', 'ar_name' => 'السويد ', 'calling_code' => '46'],
			['code' => 'CH', 'en_name' => 'Switzerland', 'ar_name' => 'سويسرا ', 'calling_code' => '41'],
			['code' => 'SY', 'en_name' => 'Syria', 'ar_name' => 'سوريا', 'calling_code' => '963'],
			['code' => 'TW', 'en_name' => 'Taiwan', 'ar_name' => 'تايوان ', 'calling_code' => '886'],
			['code' => 'TJ', 'en_name' => 'Tajikistan', 'ar_name' => 'طاجكستان ', 'calling_code' => '992'],
			['code' => 'TZ', 'en_name' => 'Tanzania', 'ar_name' => 'تانزانيا ', 'calling_code' => '255'],
			['code' => 'TH', 'en_name' => 'Thailand', 'ar_name' => 'تايلند ', 'calling_code' => '66'],
			['code' => 'TL', 'en_name' => 'Timor-Leste', 'ar_name' => 'تيمور الشرقية ', 'calling_code' => '670'],
			['code' => 'TG', 'en_name' => 'Togo', 'ar_name' => 'توجو ', 'calling_code' => '228'],
			['code' => 'TK', 'en_name' => 'Tokelau', 'ar_name' => 'توكيلو ', 'calling_code' => '690'],
			['code' => 'TO', 'en_name' => 'Tonga', 'ar_name' => 'تونغا ', 'calling_code' => '676'],
			['code' => 'TT', 'en_name' => 'Trinidad and Tobago', 'ar_name' => 'ترينيداد وتوباغو ', 'calling_code' => '1 868'],
			['code' => 'TN', 'en_name' => 'Tunisia', 'ar_name' => 'تونس', 'calling_code' => '216'],
			['code' => 'TR', 'en_name' => 'Turkey', 'ar_name' => 'تركيا ', 'calling_code' => '90'],
			['code' => 'TM', 'en_name' => 'Turkmenistan', 'ar_name' => 'تركمانستان ', 'calling_code' => '993'],
			['code' => 'TC', 'en_name' => 'Turks and Caicos Islands', 'ar_name' => 'جزر الترك وجايكوس ', 'calling_code' => '1 649'],
			['code' => 'TV', 'en_name' => 'Tuvalu', 'ar_name' => 'توفالو ', 'calling_code' => '688'],
			['code' => 'UG', 'en_name' => 'Uganda', 'ar_name' => 'أوغندا ', 'calling_code' => '256'],
			['code' => 'UA', 'en_name' => 'Ukraine', 'ar_name' => 'أوكرانيا ', 'calling_code' => '380'],
			['code' => 'AE', 'en_name' => 'United Arab Emirates', 'ar_name' => 'الإمارات العربية المتحدة', 'calling_code' => '971'],
			['code' => 'GB', 'en_name' => 'United Kingdom', 'ar_name' => 'المملكة المتحدة ', 'calling_code' => '44'],
			['code' => 'US', 'en_name' => 'United States', 'ar_name' => 'الولايات المتحدة ', 'calling_code' => '1'],
			['code' => 'UM', 'en_name' => 'U.S. Outlying Islands', 'ar_name' => 'جزر الولايات المتحدة البعيدة الصغيرة ', 'calling_code' => NULL],
			['code' => 'UY', 'en_name' => 'Uruguay', 'ar_name' => 'أورغواي ', 'calling_code' => '598'],
			['code' => 'UZ', 'en_name' => 'Uzbekistan', 'ar_name' => 'أوزبكستان ', 'calling_code' => '998'],
			['code' => 'VU', 'en_name' => 'Vanuatu', 'ar_name' => 'فانواتو ', 'calling_code' => '678'],
			['code' => 'VE', 'en_name' => 'Venezuela', 'ar_name' => 'فنزويلا ', 'calling_code' => '58'],
			['code' => 'VN', 'en_name' => 'Vietnam', 'ar_name' => 'فيتنام ', 'calling_code' => '84'],
			['code' => 'VG', 'en_name' => 'British Virgin Islands', 'ar_name' => 'جزر فرجين البريطانية ', 'calling_code' => '1 284'],
			['code' => 'VI', 'en_name' => 'U.S. Virgin Islands', 'ar_name' => 'جزر فرجين الأمريكية ', 'calling_code' => '1 340'],
			['code' => 'WF', 'en_name' => 'Wallis and Futuna', 'ar_name' => 'جزر والس وفوتونا ', 'calling_code' => '681'],
			['code' => 'EH', 'en_name' => 'Western Sahara', 'ar_name' => 'الصحراء الغربية', 'calling_code' => '212'],
			['code' => 'YE', 'en_name' => 'Yemen', 'ar_name' => 'اليمن', 'calling_code' => '967'],
			['code' => 'ZM', 'en_name' => 'Zambia', 'ar_name' => 'زامبيا ', 'calling_code' => '260'],
			['code' => 'ZW', 'en_name' => 'Zimbabwe', 'ar_name' => 'زيمبابوي ', 'calling_code' => '263'],
		];

		foreach ($countries as $country) {
			Country::create([
				'code' => $country['code'],
				'en_name' => $country['en_name'],
				'ar_name' => $country['ar_name'],
				'calling_code' => $country['calling_code'],
			]);

		}

	}
}