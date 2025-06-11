<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SupportFlow - Gestion de Tickets</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</head>
<body class="bg-gray-50">
  <!-- Header -->
  <header class="bg-indigo-600 shadow-md">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <i class="fas fa-ticket-alt text-white text-2xl"></i>
        <h1 class="text-white text-xl font-bold">SupportFlow</h1>
      </div>
      <div class="flex items-center space-x-4">
        <div class="relative">
          <i class="fas fa-bell text-white text-lg cursor-pointer"></i>
          <span class="absolute top-0 right-0 -mt-1 -mr-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
        </div>
        <div class="flex items-center space-x-2">
          <div class="w-8 h-8 bg-indigo-300 rounded-full flex items-center justify-center">
            <span class="text-indigo-700 font-semibold">JD</span>
          </div>
          <span class="text-white">John Doe</span>
          <i class="fas fa-chevron-down text-white text-xs"></i>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-6">
    <!-- Role-based welcome message -->
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800">Bonjour, John</h2>
      <p class="text-gray-600">Développeur | Connecté depuis 09:45</p>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
      <div class="bg-white rounded-lg shadow p-4 border-l-4 border-blue-500">
        <div class="flex justify-between items-center">
          <div>
            <p class="text-gray-500">Tickets totaux</p>
            <h3 class="text-2xl font-bold">142</h3>
          </div>
          <div class="bg-blue-100 p-2 rounded-full">
            <i class="fas fa-ticket-alt text-blue-600 text-xl"></i>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow p-4 border-l-4 border-yellow-500">
        <div class="flex justify-between items-center">
          <div>
            <p class="text-gray-500">En attente</p>
            <h3 class="text-2xl font-bold">38</h3>
          </div>
          <div class="bg-yellow-100 p-2 rounded-full">
            <i class="fas fa-clock text-yellow-600 text-xl"></i>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow p-4 border-l-4 border-green-500">
        <div class="flex justify-between items-center">
          <div>
            <p class="text-gray-500">Résolus</p>
            <h3 class="text-2xl font-bold">93</h3>
          </div>
          <div class="bg-green-100 p-2 rounded-full">
            <i class="fas fa-check-circle text-green-600 text-xl"></i>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow p-4 border-l-4 border-purple-500">
        <div class="flex justify-between items-center">
          <div>
            <p class="text-gray-500">Assignés à vous</p>
            <h3 class="text-2xl font-bold">7</h3>
          </div>
          <div class="bg-purple-100 p-2 rounded-full">
            <i class="fas fa-user-check text-purple-600 text-xl"></i>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Features Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Tickets List Section -->
      <div class="lg:col-span-2">
        <div class="bg-white rounded-lg shadow">
          <div class="px-4 py-3 border-b flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-700">Vos tickets assignés</h3>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition flex items-center">
              <i class="fas fa-plus mr-2"></i> Nouveau ticket
            </button>
          </div>
          
          <!-- Search and Filter Bar -->
          <div class="px-4 py-3 border-b bg-gray-50">
            <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2">
              <div class="relative flex-grow">
                <input type="text" placeholder="Rechercher par mots-clés..." class="pl-10 pr-4 py-2 rounded-md border w-full focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
              </div>
              <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option>Tous les statuts</option>
                <option>En cours</option>
                <option>Résolu</option>
                <option>Fermé</option>
              </select>
              <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-400">
                <option>Toute priorité</option>
                <option>Haute</option>
                <option>Moyenne</option>
                <option>Basse</option>
              </select>
            </div>
          </div>
          
          <!-- Tickets List -->
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="bg-gray-50 text-left text-gray-600 text-sm">
                  <th class="px-4 py-3 font-medium">Titre</th>
                  <th class="px-4 py-3 font-medium">Priorité</th>
                  <th class="px-4 py-3 font-medium">Statut</th>
                  <th class="px-4 py-3 font-medium">Date</th>
                  <th class="px-4 py-3 font-medium">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-t hover:bg-gray-50">
                  <td class="px-4 py-3">
                    <div>
                      <p class="font-medium">Erreur de connexion à la base de données</p>
                      <p class="text-sm text-gray-500">Windows 10 • SQL Server</p>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs">Haute</span></td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">En cours</span></td>
                  <td class="px-4 py-3 text-sm text-gray-500">Il y a 2 heures</td>
                  <td class="px-4 py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                      <button class="p-1 text-green-600 hover:text-green-800"><i class="fas fa-check"></i></button>
                    </div>
                  </td>
                </tr>
                <tr class="border-t hover:bg-gray-50">
                  <td class="px-4 py-3">
                    <div>
                      <p class="font-medium">Interface de rapport non responsive</p>
                      <p class="text-sm text-gray-500">MacOS • Reporting Tool</p>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Moyenne</span></td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">En cours</span></td>
                  <td class="px-4 py-3 text-sm text-gray-500">Hier, 15:30</td>
                  <td class="px-4 py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                      <button class="p-1 text-green-600 hover:text-green-800"><i class="fas fa-check"></i></button>
                    </div>
                  </td>
                </tr>
                <tr class="border-t hover:bg-gray-50">
                  <td class="px-4 py-3">
                    <div>
                      <p class="font-medium">Problème d'import des fichiers CSV</p>
                      <p class="text-sm text-gray-500">Linux • Import Module</p>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Basse</span></td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">En cours</span></td>
                  <td class="px-4 py-3 text-sm text-gray-500">18 Feb, 2025</td>
                  <td class="px-4 py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                      <button class="p-1 text-green-600 hover:text-green-800"><i class="fas fa-check"></i></button>
                    </div>
                  </td>
                </tr>
                <tr class="border-t hover:bg-gray-50">
                  <td class="px-4 py-3">
                    <div>
                      <p class="font-medium">Plantage lors de l'export PDF</p>
                      <p class="text-sm text-gray-500">Windows 11 • Export Tool</p>
                    </div>
                  </td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">Moyenne</span></td>
                  <td class="px-4 py-3"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs">En cours</span></td>
                  <td class="px-4 py-3 text-sm text-gray-500">17 Feb, 2025</td>
                  <td class="px-4 py-3">
                    <div class="flex space-x-2">
                      <button class="p-1 text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></button>
                      <button class="p-1 text-green-600 hover:text-green-800"><i class="fas fa-check"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Pagination -->
          <div class="px-4 py-3 border-t">
            <div class="flex justify-between items-center">
              <p class="text-sm text-gray-600">Affichage de 1-4 sur 7 entrées</p>
              <div class="flex space-x-1">
                <button class="px-3 py-1 border rounded bg-gray-100 text-gray-600">Précédent</button>
                <button class="px-3 py-1 border rounded bg-indigo-600 text-white">1</button>
                <button class="px-3 py-1 border rounded hover:bg-gray-100">2</button>
                <button class="px-3 py-1 border rounded hover:bg-gray-100">Suivant</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Right Sidebar -->
      <div class="lg:col-span-1 space-y-6">
        <!-- Performance Stats -->
        <div class="bg-white rounded-lg shadow">
          <div class="px-4 py-3 border-b">
            <h3 class="text-lg font-semibold text-gray-700">Performance</h3>
          </div>
          <div class="p-4">
            <div class="mb-4">
              <div class="flex justify-between mb-1">
                <p class="text-sm text-gray-600">Taux de résolution</p>
                <p class="text-sm font-medium">85%</p>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-green-500 h-2 rounded-full" style="width: 85%"></div>
              </div>
            </div>
            <div class="mb-4">
              <div class="flex justify-between mb-1">
                <p class="text-sm text-gray-600">Temps moyen de résolution</p>
                <p class="text-sm font-medium">1.8 jours</p>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 70%"></div>
              </div>
            </div>
            <div>
              <div class="flex justify-between mb-1">
                <p class="text-sm text-gray-600">Satisfaction client</p>
                <p class="text-sm font-medium">92%</p>
              </div>
              <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-purple-500 h-2 rounded-full" style="width: 92%"></div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Top Software Issues -->
        <div class="bg-white rounded-lg shadow">
          <div class="px-4 py-3 border-b">
            <h3 class="text-lg font-semibold text-gray-700">Logiciels les plus signalés</h3>
          </div>
          <div class="p-4">
            <div class="space-y-3">
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <div class="w-8 h-8 rounded bg-blue-100 flex items-center justify-center mr-3">
                    <i class="fas fa-database text-blue-600"></i>
                  </div>
                  <p>SQL Server</p>
                </div>
                <p class="font-medium">28</p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <div class="w-8 h-8 rounded bg-green-100 flex items-center justify-center mr-3">
                    <i class="fas fa-file-export text-green-600"></i>
                  </div>
                  <p>Export Tool</p>
                </div>
                <p class="font-medium">23</p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <div class="w-8 h-8 rounded bg-red-100 flex items-center justify-center mr-3">
                    <i class="fas fa-chart-pie text-red-600"></i>
                  </div>
                  <p>Reporting Tool</p>
                </div>
                <p class="font-medium">19</p>
              </div>
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <div class="w-8 h-8 rounded bg-yellow-100 flex items-center justify-center mr-3">
                    <i class="fas fa-file-import text-yellow-600"></i>
                  </div>
                  <p>Import Module</p>
                </div>
                <p class="font-medium">14</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Top Developers -->
        <div class="bg-white rounded-lg shadow">
          <div class="px-4 py-3 border-b">
            <h3 class="text-lg font-semibold text-gray-700">Top Développeurs</h3>
          </div>
          <div class="p-4">
            <div class="space-y-4">
              <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-indigo-300 flex items-center justify-center mr-3">
                  <span class="text-indigo-700 font-semibold">SM</span>
                </div>
                <div class="flex-grow">
                  <p class="font-medium">Sophie Martin</p>
                  <div class="flex items-center">
                    <p class="text-sm text-gray-500 mr-2">32 tickets résolus</p>
                    <div class="flex">
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-green-300 flex items-center justify-center mr-3">
                  <span class="text-green-700 font-semibold">PD</span>
                </div>
                <div class="flex-grow">
                  <p class="font-medium">Pierre Dupont</p>
                  <div class="flex items-center">
                    <p class="text-sm text-gray-500 mr-2">29 tickets résolus</p>
                    <div class="flex">
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="far fa-star text-yellow-400 text-xs"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex items-center">
                <div class="w-10 h-10 rounded-full bg-red-300 flex items-center justify-center mr-3">
                  <span class="text-red-700 font-semibold">JD</span>
                </div>
                <div class="flex-grow">
                  <p class="font-medium">John Doe</p>
                  <div class="flex items-center">
                    <p class="text-sm text-gray-500 mr-2">24 tickets résolus</p>
                    <div class="flex">
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="fas fa-star text-yellow-400 text-xs"></i>
                      <i class="far fa-star text-yellow-400 text-xs"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white border-t mt-6">
    <div class="container mx-auto px-4 py-4">
      <div class="flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-600 text-sm">© 2025 SupportFlow. Tous droits réservés.</p>
        <div class="flex space-x-4 mt-3 md:mt-0">
          <a href="#" class="text-gray-600 hover:text-indigo-600 text-sm">Aide</a>
          <a href="#" class="text-gray-600 hover:text-indigo-600 text-sm">Confidentialité</a>
          <a href="#" class="text-gray-600 hover:text-indigo-600 text-sm">Conditions</a>
          <a href="#" class="text-gray-600 hover:text-indigo-600 text-sm">Contact</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>