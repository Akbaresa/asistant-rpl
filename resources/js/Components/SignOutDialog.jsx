import { Button, Dialog, DialogFooter, DialogHeader } from '@material-tailwind/react';
import axios from 'axios';
import { Env } from '@/Lib/Utils.js';
import { router } from '@inertiajs/react';
import { memo } from 'react';
import { bool, func } from 'prop-types';

const SignOutDialog = ({ open, setOpen }) => {

    return (
        <>
            <Dialog
                open={open}
                handler={() => setOpen(false)}
                size="xs"
            >
                <DialogHeader className="text-xl flex items-center justify-center ">Apakah kamu benar ingin Logout?</DialogHeader>
                <DialogFooter>
                    <Button
                        variant="gradient"
                        color="green"
                        onClick={() => setOpen(false)}
                        className="mr-1"
                    >
                        <span className="text-gray-900">Nah</span>
                    </Button>
                    <Button variant="text" color="gray" onClick={() => {
                        axios.post(`${Env.appUrl}/api/auth/logout`, undefined, {
                            withCredentials: true
                        })
                            .then(() => router.visit('/'))
                            .catch(() => console.log('Whoops'))
                            .finally(() =>  setOpen(false));
                    }}>
                        <span className="font-bold">Okay</span>
                    </Button>
                </DialogFooter>
            </Dialog>
        </>
    );
};
SignOutDialog.propTypes = {
    open: bool,
    setOpen: func
};
export default memo(SignOutDialog);
