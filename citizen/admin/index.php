<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rwanda Citizen Engagement - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Font Awesome Icons (latest, one source only) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --rwanda-blue: #00a0e9;
            --rwanda-yellow: #fad201;
            --rwanda-green: #00a651;
        }

        .bg-rwanda-blue {
            background-color: var(--rwanda-blue);
        }

        .bg-rwanda-yellow {
            background-color: var(--rwanda-yellow);
        }

        .bg-rwanda-green {
            background-color: var(--rwanda-green);
        }

        .text-rwanda-blue {
            color: var(--rwanda-blue);
        }

        .text-rwanda-yellow {
            color: var(--rwanda-yellow);
        }

        .text-rwanda-green {
            color: var(--rwanda-green);
        }

        .border-rwanda-blue {
            border-color: var(--rwanda-blue);
        }

        .border-rwanda-yellow {
            border-color: var(--rwanda-yellow);
        }

        .border-rwanda-green {
            border-color: var(--rwanda-green);
        }

        .nav-link {
            position: relative;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--rwanda-yellow);
        }

        .ticket-card {
            transition: all 0.3s ease;
        }

        .ticket-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        #globe-container {
            width: 100%;
            height: 200px;
            position: relative;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }

        .fade-in-delay-1 {
            animation-delay: 0.1s;
        }

        .fade-in-delay-2 {
            animation-delay: 0.2s;
        }

        .fade-in-delay-3 {
            animation-delay: 0.3s;
        }

        .fade-in-delay-4 {
            animation-delay: 0.4s;
        }

        /* Progress Bar Animation */
        @keyframes progress {
            0% {
                width: 0;
            }

            100% {
                width: 100%;
            }
        }

        .progress-animation {
            animation: progress 1.5s ease-out forwards;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--rwanda-blue);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0088cc;
        }

        /* Wave effect */
        .wave-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
            height: 100%;
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: scale(1.5);
            animation: wave 8s infinite linear;
        }

        .wave:nth-child(2) {
            bottom: -5%;
            animation-delay: 0.5s;
            opacity: 0.6;
        }

        .wave:nth-child(3) {
            bottom: -10%;
            animation-delay: 1s;
            opacity: 0.4;
        }

        @keyframes wave {
            0% {
                transform: scale(1.5) translateX(-10%) rotate(0deg);
            }

            100% {
                transform: scale(1.5) translateX(10%) rotate(360deg);
            }
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="hidden md:flex flex-col w-64 bg-white shadow-lg">
            <div class="p-4 flex items-center justify-center border-b">
                <div class="relative w-12 h-12 mr-3">
                    <div class="absolute inset-0 rounded-full overflow-hidden">
                        <div class="h-4 bg-rwanda-blue"></div>
                        <div class="h-4 bg-rwanda-yellow"></div>
                        <div class="h-4 bg-rwanda-green"></div>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="font-bold text-lg text-gray-800">CES</span>
                    </div>
                </div>
                <h1 class="text-xl font-bold">Rwanda CES</h1>
            </div>

            <div class="flex-1 overflow-y-auto py-4">
                <nav class="px-4">
                    <div class="space-y-2">
                        <a href="#" class="flex items-center px-4 py-3 text-gray-800 bg-gray-100 rounded-lg">
                            <i class="fas fa-tachometer-alt mr-3 text-rwanda-blue"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-ticket-alt mr-3 text-rwanda-green"></i>
                            <span>Tickets</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-users mr-3 text-rwanda-yellow"></i>
                            <span>Agents</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-comment-alt mr-3 text-rwanda-blue"></i>
                            <span>Messages</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-chart-bar mr-3 text-rwanda-green"></i>
                            <span>Analytics</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-cog mr-3 text-rwanda-yellow"></i>
                            <span>Settings</span>
                        </a>
                    </div>

                    <div class="mt-8">
                        <h3 class="px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Categories</h3>
                        <div class="mt-4 space-y-2">
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                                <span class="w-2 h-2 rounded-full bg-red-500 mr-3"></span>
                                <span>Infrastructure</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                                <span class="w-2 h-2 rounded-full bg-blue-500 mr-3"></span>
                                <span>Healthcare</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                                <span class="w-2 h-2 rounded-full bg-green-500 mr-3"></span>
                                <span>Education</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                                <span class="w-2 h-2 rounded-full bg-yellow-500 mr-3"></span>
                                <span>Security</span>
                            </a>
                            <a href="#" class="flex items-center px-4 py-2 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                                <span class="w-2 h-2 rounded-full bg-purple-500 mr-3"></span>
                                <span>Other</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="p-4 border-t">
                <div class="flex items-center">
                    <img src="/api/placeholder/40/40" alt="Profile" class="w-10 h-10 rounded-full border-2 border-rwanda-blue">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">Jean Mugabo</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                    <button class="ml-auto text-gray-500 hover:text-gray-700">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </div>
            </div>
        </aside>

        <!-- Mobile sidebar toggle -->
        <div class="md:hidden fixed bottom-4 right-4 z-50">
            <button id="mobile-menu-toggle" class="p-3 rounded-full bg-rwanda-blue text-white shadow-lg">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile sidebar overlay -->
        <div id="mobile-menu-overlay" class="fixed inset-0 z-40 bg-black bg-opacity-50 hidden"></div>

        <!-- Mobile sidebar menu -->
        <div id="mobile-menu" class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300">
            <!-- Same content as desktop sidebar -->
            <div class="p-4 flex items-center justify-center border-b">
                <div class="relative w-12 h-12 mr-3">
                    <div class="absolute inset-0 rounded-full overflow-hidden">
                        <div class="h-4 bg-rwanda-blue"></div>
                        <div class="h-4 bg-rwanda-yellow"></div>
                        <div class="h-4 bg-rwanda-green"></div>
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="font-bold text-lg text-gray-800">CES</span>
                    </div>
                </div>
                <h1 class="text-xl font-bold">Rwanda CES</h1>
                <button id="mobile-menu-close" class="ml-auto text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="flex-1 overflow-y-auto py-4">
                <nav class="px-4">
                    <div class="space-y-2">
                        <a href="#" class="flex items-center px-4 py-3 text-gray-800 bg-gray-100 rounded-lg">
                            <i class="fas fa-tachometer-alt mr-3 text-rwanda-blue"></i>
                            <span>Dashboard</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-ticket-alt mr-3 text-rwanda-green"></i>
                            <span>Tickets</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-users mr-3 text-rwanda-yellow"></i>
                            <span>Agents</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-comment-alt mr-3 text-rwanda-blue"></i>
                            <span>Messages</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-chart-bar mr-3 text-rwanda-green"></i>
                            <span>Analytics</span>
                        </a>
                        <a href="#" class="flex items-center px-4 py-3 text-gray-600 hover:bg-gray-100 rounded-lg transition-colors">
                            <i class="fas fa-cog mr-3 text-rwanda-yellow"></i>
                            <span>Settings</span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main content -->
        <main class="flex-1 overflow-y-auto overflow-x-hidden bg-gray-100">
            <!-- Top navigation bar -->
            <header class="bg-white shadow-sm sticky top-0 z-10">
                <div class="mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16">
                        <div class="flex items-center">
                            <h1 class="text-xl font-semibold text-gray-800">Admin Dashboard</h1>
                        </div>

                        <div class="flex items-center space-x-4">
                            <button class="p-1 text-gray-500 hover:text-gray-700">
                                <i class="fas fa-search text-lg"></i>
                            </button>
                            <button class="p-1 text-gray-500 hover:text-gray-700 relative">
                                <i class="fas fa-bell text-lg"></i>
                                <span class="absolute top-0 right-0 w-2 h-2 rounded-full bg-red-500"></span>
                            </button>
                            <button class="hidden md:block p-1 text-gray-500 hover:text-gray-700">
                                <i class="fas fa-cog text-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard content -->
            <div class="p-4 sm:p-6 lg:p-8">
                <!-- Welcome message -->
                <div class="mb-6 fade-in">
                    <h2 class="text-2xl font-bold text-gray-800">Welcome back, Jean!</h2>
                    <p class="text-gray-600">Here's what's happening with the Citizen Engagement System today.</p>
                </div>

                <!-- Stats cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Active tickets -->
                    <div class="bg-white rounded-lg shadow-sm p-6 wave-container fade-in fade-in-delay-1">
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">Active Tickets</h3>
                                <span class="p-2 rounded-full bg-rwanda-blue bg-opacity-10">
                                    <i class="fas fa-ticket-alt text-rwanda-blue"></i>
                                </span>
                            </div>
                            <p class="text-3xl font-bold">247</p>
                            <div class="flex items-center mt-2">
                                <span class="text-green-500 text-sm flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 12%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">From last week</span>
                            </div>
                        </div>
                    </div>

                    <!-- Resolved tickets -->
                    <div class="bg-white rounded-lg shadow-sm p-6 wave-container fade-in fade-in-delay-2">
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">Resolved</h3>
                                <span class="p-2 rounded-full bg-rwanda-green bg-opacity-10">
                                    <i class="fas fa-check-circle text-rwanda-green"></i>
                                </span>
                            </div>
                            <p class="text-3xl font-bold">189</p>
                            <div class="flex items-center mt-2">
                                <span class="text-green-500 text-sm flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 8%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">From last week</span>
                            </div>
                        </div>
                    </div>

                    <!-- Response time -->
                    <div class="bg-white rounded-lg shadow-sm p-6 wave-container fade-in fade-in-delay-3">
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">Avg. Response</h3>
                                <span class="p-2 rounded-full bg-rwanda-yellow bg-opacity-10">
                                    <i class="fas fa-clock text-rwanda-yellow"></i>
                                </span>
                            </div>
                            <p class="text-3xl font-bold">4.2 hrs</p>
                            <div class="flex items-center mt-2">
                                <span class="text-red-500 text-sm flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 3%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">From last week</span>
                            </div>
                        </div>
                    </div>

                    <!-- Satisfaction -->
                    <div class="bg-white rounded-lg shadow-sm p-6 wave-container fade-in fade-in-delay-4">
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="wave"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800">Satisfaction</h3>
                                <span class="p-2 rounded-full bg-rwanda-blue bg-opacity-10">
                                    <i class="fas fa-smile text-rwanda-blue"></i>
                                </span>
                            </div>
                            <p class="text-3xl font-bold">87%</p>
                            <div class="flex items-center mt-2">
                                <span class="text-green-500 text-sm flex items-center">
                                    <i class="fas fa-arrow-up mr-1"></i> 5%
                                </span>
                                <span class="text-gray-500 text-sm ml-2">From last week</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart and activity -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                    <!-- Chart -->
                    <div class="bg-white rounded-lg shadow-sm p-6 lg:col-span-2 fade-in">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-800">Ticket Analytics</h3>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-sm bg-gray-100 text-gray-800 rounded-md hover:bg-gray-200">Day</button>
                                <button class="px-3 py-1 text-sm bg-rwanda-blue text-white rounded-md">Week</button>
                                <button class="px-3 py-1 text-sm bg-gray-100 text-gray-800 rounded-md hover:bg-gray-200">Month</button>
                            </div>
                        </div>
                        <div class="h-64">
                            <canvas id="ticketsChart"></canvas>
                        </div>
                    </div>

                    <!-- Recent activity -->
                    <div class="bg-white rounded-lg shadow-sm p-6 fade-in">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-800">Recent Activity</h3>
                            <button class="text-rwanda-blue hover:underline text-sm">View All</button>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-rwanda-blue bg-opacity-10 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-ticket-alt text-sm text-rwanda-blue"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-800">New ticket <span class="font-semibold">#2874</span> submitted by <span class="font-semibold">Marie Uwase</span></p>
                                    <p class="text-xs text-gray-500 mt-1">10 minutes ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-rwanda-green bg-opacity-10 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-check text-sm text-rwanda-green"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-800"><span class="font-semibold">Jean Bosco</span> resolved ticket <span class="font-semibold">#2865</span></p>
                                    <p class="text-xs text-gray-500 mt-1">32 minutes ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-rwanda-yellow bg-opacity-10 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-comment text-sm text-rwanda-yellow"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-800"><span class="font-semibold">Grace Mukagasana</span> commented on ticket <span class="font-semibold">#2869</span></p>
                                    <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-user-plus text-sm text-purple-500"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-800"><span class="font-semibold">Emmanuel Ndayisaba</span> assigned to Infrastructure team</p>
                                    <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-8 h-8 rounded-full bg-rwanda-blue bg-opacity-10 flex items-center justify-center mr-3 flex-shrink-0">
                                    <i class="fas fa-ticket-alt text-sm text-rwanda-blue"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-800">New ticket <span class="font-semibold">#2871</span> submitted by <span class="font-semibold">Paul Mugisha</span></p>
                                    <p class="text-xs text-gray-500 mt-1">3 hours ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3D map visualization and category distribution -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                    <!-- 3D Map -->
                    <div class="bg-white rounded-lg shadow-sm p-6 lg:col-span-2 fade-in">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-800">Ticket Distribution Map</h3>
                            <div class="flex items-center space-x-2">
                                <div class="flex items-center">
                                    <span class="w-3 h-3 rounded-full bg-rwanda-blue mr-1"></span>
                                    <span class="text-xs text-gray-600">High density</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-3 h-3 rounded-full bg-rwanda-yellow mr-1"></span>
                                    <span class="text-xs text-gray-600">Medium</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="w-3 h-3 rounded-full bg-gray-300 mr-1"></span>
                                    <span class="text-xs text-gray-600">Low</span>
                                </div>
                            </div>
                        </div>
                        <div id="globe-container"></div>
                    </div>

                    <!-- Category distribution -->
                    <div class="bg-white rounded-lg shadow-sm p-6 fade-in">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="text-lg font-semibold text-gray-800">Categories</h3>
                            <button class="text-rwanda-blue hover:underline text-sm">Details</button>
                        </div>
                        <div class="space-y-4">
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Infrastructure</span>
                                    <span class="text-sm font-medium text-gray-700">42%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="bg-rwanda-blue h-full rounded-full progress-animation" style="width: 42%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Healthcare</span>
                                    <span class="text-sm font-medium text-gray-700">28%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="bg-rwanda-green h-full rounded-full progress-animation" style="width: 28%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Education</span>
                                    <span class="text-sm font-medium text-gray-700">18%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="bg-rwanda-yellow h-full rounded-full progress-animation" style="width: 18%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Security</span>
                                    <span class="text-sm font-medium text-gray-700">8%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="bg-red-500 h-full rounded-full progress-animation" style="width: 8%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <span class="text-sm font-medium text-gray-700">Other</span>
                                    <span class="text-sm font-medium text-gray-700">4%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="bg-purple-500 h-full rounded-full progress-animation" style="width: 4%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent tickets -->
                <div class="bg-white rounded-lg shadow-sm p-6 mb-6 fade-in">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Recent Tickets</h3>
                        <button class="text-rwanda-blue hover:underline text-sm">View All Tickets</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#2874</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Road maintenance needed in Kigali sector</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Infrastructure</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Today</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-rwanda-blue hover:text-blue-900">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#2873</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Water supply issue in Nyamirambo</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Infrastructure</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">In Progress</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Yesterday</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-rwanda-blue hover:text-blue-900">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#2872</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Request for additional teachers at Kigali Primary School</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Education</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Resolved</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 days ago</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-rwanda-blue hover:text-blue-900">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#2871</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Streetlight not working in Kimihurura</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Infrastructure</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">In Progress</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">3 days ago</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-rwanda-blue hover:text-blue-900">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#2870</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Request for community health worker in Gasabo</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Healthcare</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Resolved</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">4 days ago</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a href="#" class="text-rwanda-blue hover:text-blue-900">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.remove('-translate-x-full');
                mobileMenuOverlay.classList.remove('hidden');
            });

            mobileMenuClose.addEventListener('click', function() {
                mobileMenu.classList.add('-translate-x-full');
                mobileMenuOverlay.classList.add('hidden');
            });

            mobileMenuOverlay.addEventListener('click', function() {
                mobileMenu.classList.add('-translate-x-full');
                mobileMenuOverlay.classList.add('hidden');
            });
        });

        // Chart.js - Tickets Analytics
        const ctx = document.getElementById('ticketsChart').getContext('2d');
        const ticketsChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'New Tickets',
                    data: [12, 19, 15, 8, 22, 14, 10],
                    backgroundColor: 'rgba(0, 160, 233, 0.2)',
                    borderColor: 'rgba(0, 160, 233, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    pointBackgroundColor: 'rgba(0, 160, 233, 1)',
                    pointRadius: 4
                }, {
                    label: 'Resolved Tickets',
                    data: [8, 15, 12, 6, 18, 11, 8],
                    backgroundColor: 'rgba(0, 166, 81, 0.2)',
                    borderColor: 'rgba(0, 166, 81, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    pointBackgroundColor: 'rgba(0, 166, 81, 1)',
                    pointRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawBorder: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // Simple 3D globe visualization
        function initGlobe() {
            const container = document.getElementById('globe-container');
            
            // Create scene
            const scene = new THREE.Scene();
            
            // Create camera
            const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
            camera.position.z = 2;
            
            // Create renderer
            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(container.clientWidth, container.clientHeight);
            container.appendChild(renderer.domElement);
            
            // Create sphere (globe)
            const geometry = new THREE.SphereGeometry(1, 32, 32);
            const material = new THREE.MeshBasicMaterial({
                color: 0x00a0e9,
                wireframe: true,
                transparent: true,
                opacity: 0.6
            });
            const globe = new THREE.Mesh(geometry, material);
            scene.add(globe);
            
            // Add points to represent ticket locations
            const pointsGeometry = new THREE.BufferGeometry();
            const pointsMaterial = new THREE.PointsMaterial({
                color: 0xfad201,
                size: 0.05
            });
            
            // Generate random points on the sphere
            const pointsCount = 50;
            const positions = new Float32Array(pointsCount * 3);
            
            for (let i = 0; i < pointsCount; i++) {
                const phi = Math.acos(-1 + (2 * i) / pointsCount);
                const theta = Math.sqrt(pointsCount * Math.PI) * phi;
                
                positions[i * 3] = Math.cos(theta) * Math.sin(phi);
                positions[i * 3 + 1] = Math.sin(theta) * Math.sin(phi);
                positions[i * 3 + 2] = Math.cos(phi);
            }
            
            pointsGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            const points = new THREE.Points(pointsGeometry, pointsMaterial);
            scene.add(points);
            
            // Animation
            function animate() {
                requestAnimationFrame(animate);
                
                globe.rotation.y += 0.005;
                points.rotation.y += 0.005;
                
                renderer.render(scene, camera);
            }
            
            animate();
            
            // Handle window resize
            window.addEventListener('resize', function() {
                camera.aspect = container.clientWidth / container.clientHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.clientWidth, container.clientHeight);
            });
        }
        
        // Initialize globe when the page is loaded
        window.addEventListener('load', initGlobe);
    </script>
</body>

</html>