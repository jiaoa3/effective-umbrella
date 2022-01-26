import java.util.List;
import java.util.ArrayList;

public class JsonIOI implements IDataIO {

    static String getPlayerDataJson() {
        return "snhueosnat unteoausn heoasntu h";
    }

    @Override
    public List<Player> read(String input) {
        Player player = new Player();
        List<Player> ret = new ArrayList<>();
        ret.add(player);
        return ret;
    }

    @Override
    public void write(List<Player> players) {
        for (Player player : players) {
            System.out.println(player.name);
        }
    }

}
