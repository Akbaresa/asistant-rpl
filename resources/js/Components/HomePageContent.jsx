import {
    Card,
    CardBody,
    Typography,
    Button,
    IconButton,
    Menu,
    MenuHandler,
    Avatar,
    MenuList,
    MenuItem,
    Navbar,
} from '@material-tailwind/react';
import { AslabData } from '@/Lib/AslabData.js';
import { Mari, MikaLove, MikaRollCake } from '@/Lib/StaticImagesLib.js';
import { FeaturedData, FooterData, SocialData } from '@/Lib/StaticDataLib.jsx';
import 'swiper/css';
import 'swiper/css/pagination';
import { Swiper, SwiperSlide } from 'swiper/react';
import { FreeMode, Pagination } from 'swiper/modules';
import { router } from '@inertiajs/react';
import { useState } from 'react';
import SignOutDialog from '@/Components/SignOutDialog.jsx';
import { authPropTypes } from '@/PropTypes/serverSharedProps.js';
import { ChevronUpIcon, PersonHeartIcon, RedHeartIcon } from '@/Components/AssetIcons.jsx';

const HomePageContent = ({ auth }) => {
    const swiperOptions = {
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10
            }
        }
    };

    const [ openLogoutDialog, setOpenLogoutDialog ] = useState(false);
    const user = auth.admin || auth.aslab || auth.praktikan
        ? {
            name: auth?.admin
                ? auth.admin.nama
                : auth?.aslab
                    ? auth.aslab.nama
                    : auth?.praktikan
                        ? auth.praktikan.nama
                        : '',
            profilLink: auth?.admin
                ? auth.admin.nama
                : auth?.aslab
                    ? auth.aslab.nama
                    : auth?.praktikan
                        ? auth.praktikan.id
                        : '',
            dashboardLink: auth?.admin
                ? '/admin/dashboard'
                : auth?.aslab
                    ? '/aslab/dashboard'
                    : auth?.praktikan
                        ? '/praktikan/dashboard'
                        : '',
        } : undefined;

    return (
        <>
            <main>
                <Navbar className="mx-auto min-w-full px-4 py-2 rounded-lg">
                    <div className="flex items-center justify-between text-gray-900 font-medium">
                        <Typography variant="h5" className="px-3 cursor-pointer py-1.5 ">
                            RAPIEL
                        </Typography>
                        {
                            user
                                ? (
                                    <Menu>
                                        <MenuHandler>
                                            <button
                                                className="group flex items-center gap-x-1 bg-transparent hover:bg-gray-200 aria-expanded:bg-gray-200 py-1.5 px-2 rounded-md transition-colors duration-300">
                                                <Avatar size="sm" src={ MikaRollCake } alt="praktikan-profile-photo"/>
                                                <ChevronUpIcon
                                                    width={ 25 }
                                                    className="group-aria-expanded:rotate-180 transition-rotate duration-200 ease-in-out"
                                                />
                                            </button>
                                        </MenuHandler>
                                        <MenuList className="text-gray-900">
                                            <MenuItem onClick={ () => {
                                                router.visit(user.profilLink);
                                            } }>
                                                Profil
                                            </MenuItem>
                                            <MenuItem onClick={ () => {
                                                router.visit(user.dashboardLink);
                                            } }>
                                                Dashboard
                                            </MenuItem>
                                            <button disabled className="my-2 w-full h-0.5 bg-gray-400"/>
                                            <MenuItem onClick={ () => setOpenLogoutDialog(true) }>
                                                Sign Out
                                            </MenuItem>
                                        </MenuList>
                                    </Menu>
                                ) : (
                                    <Button className="p-0 px-4 py-3" onClick={ () => {
                                        router.visit('/login');
                                    } }>
                                        Login
                                    </Button>
                                )
                        }
                    </div>
                </Navbar>
                <section className="relative flex h-screen content-center items-center justify-center pt-16 pb-32">
                    <div className="absolute top-0 h-full w-full bg-[url(/resources/js/Assets/images/LBP-Praktikum.webp)] bg-cover bg-center"/>
                    <div className="absolute top-0 h-full w-full bg-black/75 bg-cover bg-center"/>
                    <div className="max-w-8xl container relative mx-auto">
                        <div className="flex flex-wrap items-center">
                            <div className="ml-auto mr-auto w-full px-4 text-center lg:w-8/12">
                                <Typography
                                    variant="h1"
                                    color="white"
                                    className="mb-6 font-black"
                                >
                                    { '"Strive for Progress, not Perfection."' }
                                </Typography>
                                <Typography variant="lead" color="white" className="opacity-80">
                                    Aliansi Laboratorium Teknik Informatika ITATS
                                </Typography>
                            </div>
                        </div>
                    </div>
                </section>

                <section className="-mt-32 bg-white px-4 pb-20 pt-4">
                    <div className="container mx-auto space-y-10">
                        <div className="grid grid-cols-1 gap-x-6 md:grid-cols-2 lg:grid-cols-3 gap-y-7">
                            {
                                FeaturedData.map(({ title, description, icon }, index) => (
                                    <Card key={ index } className={ `rounded-lg shadow-md shadow-zinc-500 ${ index === 1 ? 'order-last lg:order-none md:translate-x-1/2 lg:translate-x-0' : '' }` }>
                                        <CardBody className="px-8 text-center">
                                            <IconButton
                                                variant="gradient"
                                                size="lg"
                                                className="pointer-events-none mb-6 rounded-full"
                                            >
                                                { icon }
                                            </IconButton>
                                            <Typography variant="h5" className="mb-2" color="blue-gray">
                                                { title }
                                            </Typography>
                                            <Typography className="font-normal text-blue-gray-600">
                                                { description }
                                            </Typography>
                                        </CardBody>
                                    </Card>
                                ))
                            }
                        </div>
                        <div className="py-5 flex flex-col lg:flex-row justify-between items-center gap-y-10">
                            <div className="mx-auto w-full lg:w-1/2">
                                <div
                                    className="inline-flex h-16 w-16 items-center justify-center rounded-full bg-blue-gray-900 text-center shadow-lg">
                                    <PersonHeartIcon
                                        className="w-8 h-8"
                                        color="white"
                                    />
                                </div>
                                <Typography
                                    variant="h3"
                                    className="mb-3 font-bold"
                                    color="blue-gray"
                                >
                                    Orang dagang
                                </Typography>
                                <Typography className="mb-8 font-normal text-blue-gray-500">
                                    The president of the Gourmet Research Society and 3rd year student enrolled at
                                    Gehenna
                                    Academy.
                                    <br/>
                                    Upon first glance, one might think she is a rich princess with an aloof elegance,
                                    but
                                    get her involved in talks of food and all sense of distinction is lost by this
                                    zealous
                                    epicure.
                                    <br/>
                                    In contrast to such gluttony, she is actually not one with a massive appetite,
                                    unlike
                                    the other club members. Her favorite foods are greasy and meaty ones such as
                                    taiyaki,
                                    motsunabe, and horumonyaki.
                                </Typography>
                                <Button
                                    className="transform scale-100 hover:scale-110 transition-transform ease-in-out duration-200 will-change-transform"
                                    variant="filled">read more</Button>
                            </div>
                            <div id="news" className="mx-auto flex w-full justify-center lg:w-96">
                                <Card className="shadow-lg border shadow-gray-500/10 rounded-lg">
                                    <CardBody>
                                        <figure className="mb-8 w-full aspect-video overflow-hidden flex items-center justify-center border border-gray-800/10 shadow-sm shadow-gray-800/30 rounded-md">
                                            <img
                                                alt="Card Image"
                                                src={MikaLove}
                                                // className="w-full h-full object-cover object-center"
                                            />
                                        </figure>
                                        <Typography variant="small" color="blue-gray" className="font-normal">
                                            Praktikum
                                        </Typography>
                                        <Typography
                                            variant="h5"
                                            color="blue-gray"
                                            className="mb-3 mt-2 font-bold"

                                        >
                                            Mika, murid kesayangan
                                        </Typography>
                                        <Typography className="font-normal text-blue-gray-500">
                                            The Arctic Ocean freezes every winter and much of the
                                            sea-ice then thaws every summer, and that process will
                                            continue whatever happens.
                                        </Typography>
                                    </CardBody>
                                </Card>
                            </div>
                        </div>
                    </div>
                </section>

                <section className="px-4 py-2">
                    <div className="container mx-auto space-y-10">
                        <div className="mx-auto w-full px-4 text-center lg:w-6/12">
                            <Typography variant="lead" className="font-semibold">
                                Asisten
                            </Typography>
                            <Typography variant="h2" color="blue-gray" className="my-3">
                                Daftar Asisten Lab saat ini
                            </Typography>
                        </div>
                        <Swiper
                            onSwiper={ (swiper) => {
                                swiper.params.breakpoints = swiperOptions.breakpoints;
                            } }
                            slidesPerView={ 4 }
                            spaceBetween={ 10 }
                            freeMode={ true }
                            pagination={ {
                                clickable: true,
                                dynamicBullets: true,
                            } }
                            modules={ [ FreeMode, Pagination ] }
                        >
                            {
                                AslabData.map((aslab, index) => (
                                    <SwiperSlide
                                        key={index}
                                        className="aspect-[3/4] bg-gray-200 rounded-md shadow-md shadow-gray-900/30 overflow-hidden p-3 space-y-3"
                                    >
                                        <img
                                            src={Mari}
                                            alt=""
                                            width={300}
                                            height="auto"
                                            className="aspect-square rounded-md object-cover object-center"
                                            loading="lazy"
                                        />
                                        <Typography variant="h6" className="text-center font-medium text-sm">
                                            {aslab.name}
                                        </Typography>
                                        <div className="w-full px-3 h-0.5 bg-black"></div>
                                        <Typography variant="h6" className="text-center font-medium text-sm">
                                            {aslab.npm ?? ''}
                                        </Typography>
                                    </SwiperSlide>
                                ))
                            }
                        </Swiper>
                    </div>
                </section>

                <footer className="relative px-4 pt-8 pb-6">
                    <div className="container mx-auto">
                        <div className="flex flex-wrap pt-6 text-center lg:text-left">
                            <div className="w-full px-4 lg:w-6/12">
                                <Typography variant="h4" className="mb-4" color="blue-gray">
                                    Laboratorium Bahasa Pemrograman
                                </Typography>
                                <Typography className="font-normal text-blue-gray-500 lg:w-2/5">
                                    Dunno to write down, akan tetapi
                                </Typography>
                                <div className="mx-auto mt-6 mb-8 flex justify-center gap-2 md:mb-0 lg:justify-start">
                                    { SocialData.map(({ path, icon }, index) => (
                                        <a
                                            key={ index }
                                            href={ path }
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            <IconButton
                                                color="white"
                                                className="rounded-full shadow-none bg-transparent"

                                            >
                                                <Typography>
                                                    { icon }
                                                </Typography>
                                            </IconButton>
                                        </a>
                                    )) }
                                </div>
                            </div>
                            <div className="mx-auto mt-12 grid w-max grid-cols-2 gap-24 lg:mt-0">
                                { FooterData.map(({ name, items }) => (
                                    <div key={ name }>
                                        <Typography
                                            variant="small"
                                            color="blue-gray"
                                            className="mb-2 block font-medium uppercase"

                                        >
                                            { name }
                                        </Typography>
                                        <ul className="mt-3">
                                            { items.map((item, index) => (
                                                <li key={ item.name }>
                                                    <Typography
                                                        as="a"
                                                        href={ item.path }
                                                        target={ `${ index === 0 ? '_self' : '_blank' }` }
                                                        rel="noreferrer"
                                                        variant="small"
                                                        className="mb-2 block font-normal text-blue-gray-500 hover:text-blue-gray-700"

                                                    >
                                                        { item.name }
                                                    </Typography>
                                                </li>
                                            )) }
                                        </ul>
                                    </div>
                                )) }
                            </div>
                        </div>
                        <hr className="my-6 border-gray-300"/>
                        <div className="flex flex-wrap items-center justify-center md:justify-between">
                            <div className="mx-auto w-full px-4 text-center">
                                <Typography>
                                    RAPIEL Asisten RPL
                                </Typography>
                                <div
                                    className="flex flex-row items-center justify-center gap-x-1 text-xs font-semibold">
                                    <p>Made with</p>
                                    <RedHeartIcon with={ 16 }/>
                                    <p>By Aliansi RPL</p>
                                </div>
                            </div>
                        </div>
                        <div className="mx-auto w-full px-4 text-center">
                            <small className="text-center   ">
                                © Laboratorium Bahasa Pemrograman x RPL ITATS { new Date().getFullYear() }
                            </small>
                        </div>
                    </div>
                </footer>
                <SignOutDialog open={ openLogoutDialog } setOpen={ setOpenLogoutDialog }/>
            </main>
        </>
    );
};
HomePageContent.propTypes = {
    auth: authPropTypes
};
export default HomePageContent;
