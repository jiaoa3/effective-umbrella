import java.util.List;

public class ViewHelper {
    static void display(boolean isCLI, List<Player> players) {
        if (isCLI) {
            new CLIView().display(players);
        } else {
            new HTMLView().display(players);
        }
    }
}
