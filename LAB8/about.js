import Link from "next/link"
import { useRouter } from "next/router"
import styles from "./header.module.css";

export default function Header() {

    const router = useRouter();

    return <nav className="navbar navbar-expand-lg navbar-light bg-light">
        <div className="container-fluid">
            <Link href="/">
                <a className="navbar-brand" href="#">SUT STORE</a>
            </Link>
            <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div className="navbar-nav">
                    <Link href="/">
                        <a className={router.pathname == "/" ? "nav-link active " + styles.linkactive : "nav-link"} aria-current="page" >Home</a>
                    </Link>
                    <Link href="/cart/user/2">
                        <a className={router.pathname == "/cart/user/[userid]" ? "nav-link active" + styles.linkactive : "nav-link"}>Cart</a>
                    </Link>
                    <Link href="/about">
                        <a className={router.pathname == "/about" ? "nav-link active" + styles.linkactive : "nav-link"}>About</a>
                    </Link>
                </div>
            </div>
        </div>
    </nav>
}