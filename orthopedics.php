<?php
$dept_key = 'orthopedics';
require_once 'includes/data.php';
include 'includes/head.php';
include 'includes/header.php';
include 'components/department-template.php';

// Districts Data
$districts = [
    'ambala' => 'Ambala',
    'bhiwani' => 'Bhiwani',
    'charkhi-dadri' => 'Charkhi Dadri',
    'faridabad' => 'Faridabad',
    'fatehabad' => 'Fatehabad',
    'gurugram' => 'Gurugram',
    'hisar' => 'Hisar',
    'jhajjar' => 'Jhajjar',
    'jind' => 'Jind',
    'kaithal' => 'Kaithal',
    'karnal' => 'Karnal',
    'kurukshetra' => 'Kurukshetra',
    'mahendragarh' => 'Mahendragarh',
    'nuh' => 'Nuh',
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

<!-- Locations Upper Footer Section -->
<section class="py-16 bg-gray-50 border-t border-gray-200 section-fade">
  <div class="container mx-auto px-4">
    <div class="max-w-6xl mx-auto">
      <div class="flex items-center space-x-3 mb-12">
        <div class="bg-[#328CCB]/10 p-2 rounded-lg">
          <?php echo getIcon('MapPin', 'h-6 w-6 text-[#328CCB]'); ?>
        </div>
        <h2 class="text-3xl font-bold text-gray-900">We are serving in these areas</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-4 gap-x-12">
        <?php foreach ($districts as $slug => $name): ?>
          <div class="group">
            <a href="/orthopedic-hospital/haryana/<?php echo $slug; ?>/" class="flex items-center space-x-3 text-gray-600 hover:text-[#328CCB] transition-colors duration-200">
              <div class="h-1.5 w-1.5 bg-gray-300 rounded-full group-hover:bg-[#328CCB] transition-colors"></div>
              <span class="font-medium">Best Orthopedic Hospital in <?php echo $name; ?></span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>