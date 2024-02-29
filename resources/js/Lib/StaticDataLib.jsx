import {
    GithubIcon, InstagramIcon, MortarBoardIcon, PersonHeartIcon,
    YoutubeIcon
} from '@/Components/AssetIcons.jsx';

export const AslabData = [
    { name: 'M. Mahameru. A', noHp: '6285646452991' },
    { name: 'Ryan Gading Abdullah', noHp: '6285109257770' },
    { name: 'Ibrahim', noHp: '6281231270544' },
    { name: 'Latiful Sirri', noHp: '6285852615782' },
    { name: 'Aditya Minantoko Putra', noHp: '6288150714046' },
    { name: 'Alif Farhan Cahyadi', noHp: '6289664948181' },
    { name: 'Annas Tasya Esti Aryus Jannah', noHp: '6289514699649' },
    { name: 'Daffa Khoirut Tamam', noHp: '6285735617265' },
    { name: 'Davin Tistama Brilliant Samudra', noHp: '628139388955' },
    { name: 'Melani Dwi Anggrani', noHp: '082215493967' }
];

export const FeaturedData = [
    { title: 'Total Praktikan', description: '99', icon: <PersonHeartIcon width={25} /> },
    { title: 'Praktikum saat ini', description: 'Struktur Data XV', icon: <MortarBoardIcon width={25} /> },
    { title: 'Total Aslab', description: '10', icon: <PersonHeartIcon with={25} className="-scale-x-100" /> },
];

export const SocialData = [
    { name: 'Instagram', path: 'https://www.instagram.com/lbp.itats', icon: <InstagramIcon color="purple" width={25} /> },
    { name: 'Youtube', path: 'https://Youtube.com/orang', icon: <YoutubeIcon color="red" width={25} /> },
    { name: 'Github', path: 'https://github.com/lab-basprog-itats', icon: <GithubIcon color="gray" width={25} /> }
];
export const FooterData = [
    {
        name: 'trivia',
        items: [
            { name: 'Tentang Kami', path: '/' },
            { name: 'Blog', path: '/' },
            { name: 'Github', path: '/' },
        ],
    },
    {
        name: 'informasi penting',
        items: [
            { name: 'Berita terbaru', path: '#news' },
            { name: 'Jadwal Praktikum', path: 'https://drive.google.com/file/d/1iXlThyz23MLGLed6QKdghplHKpVKd1HW/view?usp=sharing' },
            { name: 'Technical Meeting', path: 'https://drive.google.com/file/d/1rWrlzBiZ3OObyt7ivMYb9yJGEEY27rYd/view?usp=drive_link' },
            { name: 'Website Labinformatika', path: 'https://labinformatika.itats.ac.id' },
        ],
    },
];


