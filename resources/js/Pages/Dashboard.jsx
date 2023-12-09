import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard(props) {
    return (
        <AuthenticatedLayout
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-6">
                <div className="mx-auto sm:px-6 lg:px-8">
					<div className="grid grid-cols-4 gap-4 mt-4">
						<div className="text-white bg-gradient-to-r to-indigo-400 from-indigo-500 shadow-sm sm:rounded-lg flex px-20 py-6 ">
							<div className="w-1/2 flex">
								<div>
								<p className="text-4xl font-bold">2050</p>
								Total Clients
								</div>
								<svg
									xmlns="http://www.w3.org/2000/svg"
									fill="none"
									viewBox="0 0 24 24"
									strokeWidth={1.5}
									stroke="#00C60E"
									className="w-6 h-6 my-auto"
								>
									<path strokeLinecap="round" strokeLinejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
								</svg>

							</div>
							<div className="w-1/2 my-auto ml-auto">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
								strokeWidth={1.5}
								stroke="currentColor"
								className="w-12 h-12 float-right">
								<path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
							</svg>

							</div>
						</div>

					</div>
                    <div className="mt-4 w-1/4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-xl font-semibold text-gray-800 dark:text-gray-200 text-center">
                            Clients
                        </div>
                        <div className="text-center mb-6">43</div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
