<?php
/**
 * Main Plastic Surgery Hub Page
 */
require_once 'includes/data.php';

// Doctor Data (Focus on Dr. Rahul Jain)
$doctor = null;
foreach ($doctors as $d) {
    if ($d['id'] === 'dr-rahul-jain') {
        $doctor = $d;
        break;
    }
}

$page_title = 'Plastic Surgery | Dr. Rahul Jain | Akropolis Hospital';
include 'includes/head.php';
include 'includes/header.php';

$districts = [
    'ambala' => 'Ambala',
    'bhiwani' => 'Bhiwani',
    'charkhi-dadri' => 'Charkhi Dadri',
    'faridabad' => 'Faridabad',
    'fatehabad' => 'Fatehabad',
    'gurgaon' => 'Gurgaon',
    'hisar' => 'Hisar',
    'jhajjar' => 'Jhajjar',
    'jind' => 'Jind',
    'kaithal' => 'Kaithal',
    'karnal' => 'Karnal',
    'kurukshetra' => 'Kurukshetra',
    'mahendragarh' => 'Mahendragarh',
    'mewat' => 'Mewat',
    'palwal' => 'Palwal',
    'panchkula' => 'Panchkula',
    'panipat' => 'Panipat',
    'rewari' => 'Rewari',
    'rohtak' => 'Rohtak',
    'sirsa' => 'Sirsa',
    'sonipat' => 'Sonipat',
    'yamunanagar' => 'Yamunanagar'
];
?>

<main class="bg-gray-50">
  <div class="bg-white border-b shadow-sm">
    <div class="container mx-auto px-4 py-12">
      <div class="flex flex-col md:flex-row items-center gap-8">
        <img src="<?php echo $doctor['image']; ?>" class="w-48 h-48 rounded-full border-4 border-[#328CCB]/20 object-cover" />
        <div class="text-center md:text-left">
          <h1 class="text-4xl font-bold text-gray-900 mb-2">हरियाणा के प्रमुख प्लास्टिक सर्जन</h1>
          <p class="text-[#328CCB] text-xl font-semibold mb-4">डॉ राहुल जैन - प्लास्टिक एवं कॉस्मेटिक सर्जन</p>
          <div class="flex flex-wrap justify-center md:justify-start gap-4">
            <a href="tel:<?php echo CONTACT_INFO['phone']; ?>" class="bg-[#328CCB] text-white px-6 py-3 rounded-xl font-bold flex items-center space-x-2">
              <?php echo getIcon('Calendar', 'h-5 w-5'); ?>
              <span>Consultation Book Karein</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-4 py-12">
    <div class="grid lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2 space-y-8">
        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h2 class="text-3xl font-bold text-gray-900 mb-6">प्लास्टिक और कॉस्मेटिक सर्जरी (Plastic Surgery Hub)</h2>
          <div class="prose prose-lg text-gray-700 space-y-6">
            <p>
                अक्रोपोलिस हॉस्पिटल में हम आधुनिक तकनीकों द्वारा प्लास्टिक और रिकंस्ट्रक्टिव सर्जरी की सेवाएं प्रदान करते हैं। डॉ राहुल जैन के नेतृत्व में हमारा विभाग सुंदरता निखारने और जटिल समस्याओं के समाधान के लिए समर्पित है।
            </p>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
          <h2 class="text-2xl font-bold text-gray-900 mb-8 flex items-center gap-3">
            <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
            हम इन क्षेत्रों में अपनी सेवाएं दे रहे हैं
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php foreach ($districts as $slug => $name): ?>
              <a href="/plastic-surgery/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 p-3 rounded-lg border border-gray-100 hover:border-[#328CCB] hover:bg-blue-50 transition-all group">
                <div class="h-2 w-2 bg-[#328CCB] rounded-full"></div>
                <span class="text-gray-700 group-hover:text-[#328CCB] font-medium"><?php echo $name; ?> में सबसे अच्छे प्लास्टिक सर्जन</span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-lg p-8 sticky top-24 border border-gray-100">
          <h3 class="font-bold text-gray-900 mb-6 text-xl">Plastic Surgery Services</h3>
          <ul class="space-y-4">
            <li class="flex items-center gap-2 text-gray-600"><?php echo getIcon('Sparkles', 'h-4 w-4 text-[#328CCB]'); ?> Liposuction</li>
            <li class="flex items-center gap-2 text-gray-600"><?php echo getIcon('Sparkles', 'h-4 w-4 text-[#328CCB]'); ?> Rhinoplasty</li>
            <li class="flex items-center gap-2 text-gray-600"><?php echo getIcon('Sparkles', 'h-4 w-4 text-[#328CCB]'); ?> Scar Removal</li>
            <li class="flex items-center gap-2 text-gray-600"><?php echo getIcon('Sparkles', 'h-4 w-4 text-[#328CCB]'); ?> Hair Transplant</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>