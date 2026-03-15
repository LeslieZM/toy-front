import { Link } from "react-router-dom";
import homeStyles from "./homeStyles";
const Home = () => {

    return (

        <nav style={homeStyles.navBar}>
            <div style={homeStyles.logo}>
                <h2 >LogoIMG </h2>
            </div>

            <div style={homeStyles.menu}>
                <a href="/toyBabys"> Bebes</a>

                <Link to="/toysKids"> Niños ejemplo</Link>    
                <Link to="/toyInfo"> Ubicacion</Link>
                <Link to="/usuario"> usuario</Link>
                <Link to="/out"> salir</Link>




            </div>
        </nav>



    );
};

export default Home;